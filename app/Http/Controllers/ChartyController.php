<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charty;
use Illuminate\Support\Facades\Storage;

class ChartyController extends Controller
{
    public function index()
    {
        $charty = Charty::all();
        return view('charty.index', compact(['charty']));
    }

    public function create()
    {
        return view('charty.create', [
            'name' => 'charty',
        ]);

        return back();
    }

    public function store(Request $request)
    {
        $charty_data = $request->validate([
            'tahun' => ['required'],
            'value' => ['required'],
        ]);

        Charty::create($charty_data);
        return redirect('/admin/charty/index');
    }

    public function edit($id)
    {
        return view('charty.edit', [
            'charty' => Charty::where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $data_sum = $request->validate([
            'tahun' => ['required'],
            'value' => ['required'],
        ]);

        Charty::where('id', $id)->update($data_sum);

        return redirect('/admin/charty/index');
    }

    public function destroy(Request $request)
    {
        if ($request->image) {
            Storage::delete($request->image);
        }
        Charty::destroy($request->id);
        return redirect('/admin/charty/index');
    }
}
