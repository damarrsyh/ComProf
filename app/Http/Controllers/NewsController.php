<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Header;
use App\Models\Summary;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;


class newsController extends Controller
{
    public function index($id)
    {
        return view('news.index', [
            'news' => News::where('id', $id)->first(),
            'headers' => Header::all(),
            'summaries' => Summary::all(),
            'galleries' => Gallery::all()
        ]);
    }

    public function aindex()
    {
        $news = News::all();
        return view('news.aindex', ['news' => $news]);
    }

    public function create()
    {
        return view('news.create', [
            'title' => 'News',
        ]);
        
        return back();
    }

    public function store(Request $request)
    {
        $news_data = $request->validate([
            'image' => ['file'],
            'title' => ['required'],
            'description' => ['required']
        ]);

        if ($request->file('image')) {
            $news_data['image'] = $request->file('image')->store('news_image');
        }
        News::create($news_data);
        return redirect('/news/aindex');
    }

    public function edit($id)
    {
        return view('news.edit', [
            
            'title' => 'news',
            'news' => News::where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $news_data = $request->validate([
            'image' => ['file'],
            'title' => ['required'],
            'description' => ['required'],
        ]);

        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $news_data['image'] = $request->file('image')->store('news_image');
        }
        News::where('id', $id)->update($news_data);
        return redirect('/news/aindex');
    }
    
    public function destroy(Request $request)
    {
        if($request->image) {
            Storage::delete($request->image);
        }
        News::destroy($request->id);
        return redirect('/news/aindex');
    }
}
