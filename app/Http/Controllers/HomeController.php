<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Summary;
use App\Models\Gallery;
use App\Models\Article;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return session('role');
        return view('home.index', [
            'headers' => Header::all(),
            'summaries' => Summary::all(),
            'galleries' => Gallery::all(),
            'article' => Article::all(),
            'news' => News::all(),  
        ]);
    }
}
