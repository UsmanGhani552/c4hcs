<?php

namespace App\Http\Controllers;

use App\Models\Record;
use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index()
    {
        $records = Record::all();
        $screened_sum = $records->sum('screened');
        $presumptive_sum = $records->sum('presumptive');
        $positive_sum = $records->sum('positive');
        $linked_sum = $records->sum('linked');

        $targets = Target::all();
        return view('target.index', compact('targets','screened_sum','presumptive_sum','positive_sum','linked_sum'));
    }

    public function edit(Target $target){
        return view('target.edit',compact('target'));
    }

    public function update(Request $request , Target $target){
        $request->validate([
            'targets' => 'required',
            'screened' => 'required',
            'presumptive' => 'required',
            'positive' => 'required',
            'linked' => 'required',
        ]);
        // dd($request->all());

        $target->targets = $request->targets;
        $target->screened = $request->screened;
        $target->presumptive = $request->presumptive;
        $target->positive = $request->positive;
        $target->linked = $request->linked;
        $target->save();
        return redirect()->route('targets')->withSuccess('Target Updated Successfully');
    }
}
