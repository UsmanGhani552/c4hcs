<?php

namespace App\Http\Controllers;

use App\Exports\MonthlyExport;
use App\Models\Monthly;
use App\Models\Record;
use App\Models\Target;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MonthlyController extends Controller
{
    public function __construct(){
        $this->middleware('role_or_permission:Monthly access|Monthly create|Monthly edit|Monthly delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Monthly create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Monthly edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Monthly delete', ['only' => ['destroy']]);
    }

    public function index(){

        // Calculate the start date of the previous month
        $startDate =  now()->startOfMonth();
        // dd( $startDate);
        // Calculate the end date of the previous month
        $endDate =  now()->endOfMonth();

        // Retrieve entries within the previous month
        $current_month = Record::whereBetween('created_at', [$startDate, $endDate])->get();
        // dd($current_month);
        $monthly_target = Target::where('id', 2)->first();
        // Calculate monthly totals
        $monthlyTotals = (object) [
            'screened' => $current_month->sum('screened'),
            'presumptive' => $current_month->sum('presumptive'),
            'positive' => $current_month->sum('positive'),
            'linked' => $current_month->sum('linked'),
            'negative' => $current_month->sum('negative'),
            'pending' => $current_month->sum('pending'),
            'invalid' => $current_month->sum('invalid'),
            'month' => $startDate->month, // Month of the start date
            'year' => $startDate->year, // Year of the start date
            'start_date' => $startDate,
            'end_date' => $endDate
        ];

        $performance = (object) [
            'screened' => number_format(($monthlyTotals->screened / ($monthly_target->screened * 10)) * 100,0),
            'presumptive' => number_format(($monthlyTotals->presumptive / ($monthly_target->presumptive * 10)) * 100,0),
            'positive' => number_format(($monthlyTotals->positive / ($monthly_target->positive * 10)) * 100,0),
            'linked' => number_format(($monthlyTotals->linked / ($monthly_target->linked * 10)) * 100,0)
        ];

        // dd($monthlyTotals);

        $monthlies = Monthly::orderBy('id','Desc')->get();
        return view('monthly.index', compact('monthlies', 'monthlyTotals', 'current_month','performance'));
    }

    public function export()
    {
        return Excel::download(new MonthlyExport, 'monthly.xlsx');
    }
}
