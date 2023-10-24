<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Summary;

class SummaryController extends Controller
{
    public function index()
    {
        $summary = Summary::all();
        return view('summary.index', compact(['summary']));
    }
    
    public function edit($id)
    {
        return view('summary.edit', [
            'summary' => Summary::where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $data_sum = $request->validate([
            'nama' => ['required'],
            'jumlah' => ['required']
        ]);

        Summary::where('id', $id)->update($data_sum);

        return redirect('/summary/index');
    }
}
