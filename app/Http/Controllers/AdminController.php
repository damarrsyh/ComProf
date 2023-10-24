<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Summary;

class AdminController extends Controller
{
    public function index()
    {
        // return session('role');
        return view('dashboard.index', [
            'summaries' => Summary::all(),
        ]);
    }
}
