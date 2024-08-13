<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Summary;
use App\Models\Gallery;
use App\Models\Article;
use App\Models\News;
use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FaqController extends Controller
{
    public function index()
    {
        $faq = Faq::all();
        return view('faq.index', [
            'faq' => $faq,
            'headers' => Header::all(),
            'summaries' => Summary::all(),
            'galleries' => Gallery::all(),
            'article' => Article::all(),
            'news' => News::all(),
        ]);
    }

    public function aindex()
    {
        $faq = Faq::all();
        return view('faq.aindex', ['faq' => $faq]);
    }

    public function create()
    {
        return view('faq.create', [
            'name' => 'faq',
        ]);

        return back();
    }

    public function store(Request $request)
    {
        $faq_data = $request->validate([
            'question' => ['required'],
            'answer' => ['required'],
        ]);

        Faq::create($faq_data);
        return redirect('/admin/faq/aindex');
    }

    public function edit($id)
    {
        return view('faq.edit', [

            'name' => 'faq',
            'faq' => Faq::where('id', $id)->first()
        ]);
    }

    public function update(Request $request, $id)
    {
        $faq_data = $request->validate([
            'question' => ['required'],
            'answer' => ['required'],
        ]);

        Faq::where('id', $id)->update($faq_data);
        return redirect('/admin/faq/aindex');
    }

    public function destroy(Request $request)
    {
        Faq::destroy($request->id);
        return redirect('/admin/faq/aindex');
    }
}
