<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsApiController extends Controller
{
    public function index()
    {
        $items = \App\Models\Item::orderBy('created_at', 'desc')->paginate(20);
        return response()->json($items);
    }
}
