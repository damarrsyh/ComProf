<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Header;
use App\Models\Summary;
use App\Models\Gallery;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{
    public function index($id)
    {
        // return 'masuk';
        $article = Article::all();
        return view('article.index', [
            'article' => Article::where('id', $id)->first(),
            'headers' => Header::all(),
            'summaries' => Summary::all(),
            'galleries' => Gallery::all()
        ]);
    }

    public function aindex()
    {
        $article = Article::all();
        return view('article.aindex', ['article' => $article]);
    }

    public function create()
    {
        return view('article.create', [
            'title' => 'Article',
        ]);
        
        return back();
    }

    public function store(Request $request)
    {
        $article_data = $request->validate([
            'image' => ['file'],
            'title' => ['required'],
            'description' => ['required']
        ]);

        if ($request->file('image')) {
            $article_data['image'] = $request->file('image')->store('article_image');
        }
        Article::create($article_data);
        return redirect('/article/aindex');
    }

    public function edit($id)
    {
        return view('article.edit', [
            
            'title' => 'article',
            'article' => Article::where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $article_data = $request->validate([
            'image' => ['file'],
            'title' => ['required'],
            'description' => ['required'],
        ]);

        if ($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $article_data['image'] = $request->file('image')->store('article_image');
        }
        Article::where('id', $id)->update($article_data);
        return redirect('/article/aindex');
    }
    
    public function destroy(Request $request)
    {
        if($request->image) {
            Storage::delete($request->image);
        }
        Article::destroy($request->id);
        return redirect('/article/aindex');
    }

}
