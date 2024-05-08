<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function shop()
    {
        $comics = Comic::orderBy('title')->get();
        return view('shop', ['comics' => $comics]);
    }


    public function about()
    {
        return view('about');
    }
}
