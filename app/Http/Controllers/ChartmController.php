<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chartm;
use Illuminate\Support\Facades\Storage;

class ChartmController extends Controller
{
    public function index()
    {
        $chartm = Chartm::all();
        return view('chartm.index', compact(['chartm']));
    }

    public function create()
    {
        return view('chartm.create', [
            'name' => 'chartm',
        ]);

        return back();
    }

    public function store(Request $request)
    {
        $chartm_data = $request->validate([
            'data' => ['required'],
            'jan' => ['required'],
            'feb' => ['required'],
            'mar' => ['required'],
            'apr' => ['required'],
            'mei' => ['required'],
            'jun' => ['required'],
            'jul' => ['required'],
            'agu' => ['required'],
            'sep' => ['required'],
            'okt' => ['required'],
            'nov' => ['required'],
            'des' => ['required'],
        ]);

        Chartm::create($chartm_data);
        return redirect('/admin/chartm/index');
    }

    public function edit($id)
    {
        return view('chartm.edit', [
            'chartm' => Chartm::where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $data_sum = $request->validate([
            'data' => ['required'],
            'jan' => ['required'],
            'feb' => ['required'],
            'mar' => ['required'],
            'apr' => ['required'],
            'mei' => ['required'],
            'jun' => ['required'],
            'jul' => ['required'],
            'agu' => ['required'],
            'sep' => ['required'],
            'okt' => ['required'],
            'nov' => ['required'],
            'des' => ['required'],
        ]);

        Chartm::where('id', $id)->update($data_sum);

        return redirect('/admin/chartm/index');
    }

    public function destroy(Request $request)
    {
        if ($request->image) {
            Storage::delete($request->image);
        }
        Chartm::destroy($request->id);
        return redirect('/admin/chartm/index');
    }
}
