<?php

namespace App\Http\Controllers;

use App\Exports\WeeklyExport;
use App\Models\Record;
use App\Models\Target;
use App\Models\Weekly;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class WeeklyController extends Controller
{
    public function index()
    {

        // Get the start of the current week
        $startDate = now()->startOfWeek();

        // Get the end of the current week
        $endDate = now()->endOfWeek();

        // Retrieve entries within the current week
        $current_week = Record::whereBetween('created_at', [$startDate, $endDate])->get();

        // $current_week = Record::all();
        $weekly_target = Target::where('id', 3)->first();
        // dd($weekly_target);
        // Calculate weekly totals
        $weeklyTotals = (object) [
            'screened' => $current_week->sum('screened'),
            'presumptive' => $current_week->sum('presumptive'),
            'positive' => $current_week->sum('positive'),
            'linked' => $current_week->sum('linked'),
            'negative' => $current_week->sum('negative'),
            'pending' => $current_week->sum('pending'),
            'invalid' => $current_week->sum('invalid'),
            'month' => $current_week->isEmpty() ? null : $current_week->first()->created_at->month,
            'year' => $current_week->isEmpty() ? null : $current_week->first()->created_at->year,
            'start_date' => $startDate,
            'end_date' => $endDate
        ];
        // dd($current_week);
        $performance = (object) [
            'screened' => number_format(($weeklyTotals->screened / ($weekly_target->screened * 10)) * 100,0),
            'presumptive' => number_format(($weeklyTotals->presumptive / ($weekly_target->presumptive * 10)) * 100,0),
            'positive' => number_format(($weeklyTotals->positive / ($weekly_target->positive * 10)) * 100,0),
            'linked' => number_format(($weeklyTotals->linked / ($weekly_target->linked * 10)) * 100,0)
        ];
        // dd($performance);

        $weeklies = Weekly::all();
        return view('weekly.index', compact('weeklies', 'weeklyTotals', 'current_week','performance'));
    }

    public function export()
    {
        return Excel::download(new WeeklyExport, 'weekly.xlsx');
    }
}
