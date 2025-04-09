<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $items = \App\Models\Item::orderBy('created_at', 'desc')->take(3)->get();

        return view('pages.home-page', compact('items'));
    }
}
