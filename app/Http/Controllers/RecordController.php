<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'screened' => 'required|numeric',
            'presumptive' => 'required|numeric',
            'positive' => 'required|numeric',
            'linked' => 'required|numeric',
            'negative' => 'required|numeric',
            'pending' => 'required|numeric',
            'invalid' => 'required|numeric',
        ]);

        $record = new Record();
        $record->screened = $request->screened;
        $record->presumptive = $request->presumptive;
        $record->positive = $request->positive;
        $record->linked = $request->linked;
        $record->negative = $request->negative;
        $record->pending = $request->pending;
        $record->invalid = $request->invalid;
        if($record->save()){
            return redirect()->route('records')->withSuccess('Records Added Successfully');
        }
    }
}
