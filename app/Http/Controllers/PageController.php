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
        return view('shop', ['comics' => Comic::all()]);
    }


    public function about()
    {
        return view('about');
    }
}
