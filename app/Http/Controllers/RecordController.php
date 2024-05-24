<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Target;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     */
    public function __construct(){
        $this->middleware('role_or_permission:Record access|Record create|Record edit|Record delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Record create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Record edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Record delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $mthly_target = Target::where('id', 1)->first();
        // $monthly_target = Target::where('id',2)->first();
        $weekly_target = Target::where('id', 3)->first();

        $startWeekDate = now()->startOfWeek();
        $endWeekDate = now()->endOfWeek();

        // Retrieve entries within the current week
        $current_week_records = Record::whereBetween('created_at', [$startWeekDate, $endWeekDate])->get();

        $startMonthDate = now()->startOfMonth();
        $endMonthDate = now()->endOfMonth();
        // Retrieve entries within the current month
        $records = Record::whereBetween('created_at', [$startMonthDate, $endMonthDate])->get();

        $screened_sum = $records->sum('screened');
        $presumptive_sum = $records->sum('presumptive');
        $positive_sum = $records->sum('positive');
        $linked_sum = $records->sum('linked');


        return view('records.index', compact('records', 'weekly_target', 'mthly_target', 'screened_sum', 'presumptive_sum', 'positive_sum', 'linked_sum', 'current_week_records'));
    }
    public function create()
    {
        return view('records.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lga' => 'required',
            'screened' => 'required|numeric',
            'presumptive' => 'required|numeric',
            // 'positive' => 'required|numeric',
            'bacteriological' => 'required|numeric',
            'clinical' => 'required|numeric',
            'linked' => 'required|numeric',
            'negative' => 'required|numeric',
            'pending' => 'required|numeric',
            'invalid' => 'required|numeric',
        ]);
        // dd($request->all());

        $record = new Record();
        $record->lga = $request->lga;
        $record->screened = $request->screened;
        $record->presumptive = $request->presumptive;
        $record->positive = $request->bacteriological + $request->clinical;
        $record->bacteriological = $request->bacteriological;
        $record->clinical = $request->clinical;
        $record->linked = $request->linked;
        $record->negative = $request->negative;
        $record->pending = $request->pending;
        $record->invalid = $request->invalid;
        if ($record->save()) {
            return redirect()->route('records')->withSuccess('Record Added Successfully');
        }
    }

    public function edit(Record $record)
    {
        return view('records.edit', compact('record'));
    }

    public function update(Request $request, Record $record)
    {
        $request->validate([
            'lga' => 'required',
            'screened' => 'required|numeric',
            'presumptive' => 'required|numeric',
            // 'positive' => 'required|numeric',
            'bacteriological' => 'required|numeric',
            'clinical' => 'required|numeric',
            'linked' => 'required|numeric',
            'negative' => 'required|numeric',
            'pending' => 'required|numeric',
            'invalid' => 'required|numeric',
        ]);

        $record->lga = $request->lga;
        $record->screened = $request->screened;
        $record->presumptive = $request->presumptive;
        $record->positive = $request->bacteriological + $request->clinical;
        $record->bacteriological = $request->bacteriological;
        $record->clinical = $request->clinical;
        $record->linked = $request->linked;
        $record->negative = $request->negative;
        $record->pending = $request->pending;
        $record->invalid = $request->invalid;
        if ($record->save()) {
            return redirect()->route('records')->withSuccess('Record Updated Successfully');
        }
    }
    public function delete(Record $record)
    {
        $record->delete();
        return redirect()->route('records')->withSuccess('Record Deleted Successfully');
    }
}
