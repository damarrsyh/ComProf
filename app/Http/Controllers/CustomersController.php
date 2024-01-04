<?php

namespace App\Http\Controllers;

use App\Models\Header;
use App\Models\Summary;
use App\Models\Gallery;
use App\Models\Article;
use App\Models\News;
use App\Models\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CustomersController extends Controller
{
  public function index()
  {
    $customers = Customers::all();
    return view('customers.index', [
      'customers' => $customers,
      'headers' => Header::all(),
      'summaries' => Summary::all(),
      'galleries' => Gallery::all(),
      'article' => Article::all(),
      'news' => News::all(),
    ]);
  }

  public function aindex()
  {
    $customers = Customers::all();
    return view('customers.aindex', ['customers' => $customers]);
  }

  public function create()
  {
    return view('customers.create', [
      'name' => 'Customers',
    ]);

    return back();
  }

  public function store(Request $request)
  {
    $customers_data = $request->validate([
      'image' => ['file'],
      'name' => ['required'],
      'branch' => ['required'],
      'business' => ['required'],
      'financing' => ['required'],
      'description' => ['required']
    ]);

    if ($request->file('image')) {
      $customers_data['image'] = $request->file('image')->store('customers_image');
    }
    Customers::create($customers_data);
    return redirect('/customers/aindex');
  }

  public function edit($id)
  {
    return view('customers.edit', [

      'name' => 'Customers',
      'customers' => Customers::where('id', $id)->first()
    ]);
  }

  public function update(Request $request, $id)
  {
    $customers_data = $request->validate([
      'image' => ['file'],
      'name' => ['required'],
      'branch' => ['required'],
      'business' => ['required'],
      'financing' => ['required'],
      'description' => ['required'],
    ]);

    if ($request->file('image')) {
      if ($request->oldImage) {
        Storage::delete($request->oldImage);
      }
      $customers_data['image'] = $request->file('image')->store('customers_image');
    }
    Customers::where('id', $id)->update($customers_data);
    return redirect('/customers/aindex');
  }

  public function destroy(Request $request)
  {
    if ($request->image) {
      Storage::delete($request->image);
    }
    Customers::destroy($request->id);
    return redirect('/customers/aindex');
  }
}
