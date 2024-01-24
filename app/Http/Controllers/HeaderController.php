<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    public function index()
    {
        $header = Header::all();
        return view('header.index', ['headers' => $header]);
    }
    public function create()
    {
        return view('header.create', [
            'title' => 'Header',
        ]);

        return back();
    }

    public function store(Request $request)
    {
        $header_data = $request->validate([
            'image' => ['file'],
        ]);

        if ($request->file('image')) {
            $header_data['image'] = $request->file('image')->store('header_image');
        }
        Header::create($header_data);
        return redirect('/admin/header/index');
    }


    public function edit($id)
    {
        return view('header.edit', [
            'title' => 'Header',
            'header' => Header::where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $header_data = $request->validate([
            'image' => ['file'],
        ]);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $header_data['image'] = $request->file('image')->store('header_image');
        }
        Header::where('id', $id)->update($header_data);
        return redirect('/admin/header/index');
    }

    public function destroy(Request $request)
    {
        if ($request->image) {
            Storage::delete($request->image);
        }
        Header::destroy($request->id);
        return redirect('/admin/header/index');
    }
}
