<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function about()
    {
        return view('about');
    }
    public function shop()
    {
        return view('shop');
    }
    public function single()
    {
        return view('shop-single');
    }
    public function contact()
    {
        return view('contact');
    }
}
