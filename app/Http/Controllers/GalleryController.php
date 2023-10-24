<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::all();
        return view('gallery.index', ['galleries' => $gallery]);
    }

    public function create()
    {
        return view('gallery.create', [
            'title' => 'Gallery'
        ]);

        return back();
    }
    
    public function store(Request $request)
    {
        $gallery_data = $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'title' => ['required'],
            'description' => ['required']
        ]);

        if ($request->file('image')) {
            $gallery_data['image'] = $request->file('image')->store('gallery_image');
        }
        Gallery::create($gallery_data);
        return redirect('/gallery/index');
    }

    public function edit($id)
    {
        return view('gallery.edit', [
            
            'title' => 'Gallery',
            'gallery' => Gallery::where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $gallery_data = $request->validate([
            'image' => ['file'],
            'title' => ['required'],
            'description' => ['required'],
        ]);

        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $gallery_data['image'] = $request->file('image')->store('gallery_image');
        }
        Gallery::where('id', $id)->update($gallery_data);
        return redirect('/gallery/index');
    }

    public function destroy(Request $request)
    {
        if($request->image) {
            Storage::delete($request->image);
        }
        Gallery::destroy($request->id);
        return redirect('/gallery/index');
    }
}