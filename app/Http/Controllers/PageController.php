<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function contact()
    {
        return view('contact');
    }

    public function desert()
    {
        return view('desert');
    }

    public function mountain()
    {
        return view('mountain');
    }

    public function neighbor()
    {
        return view('neighbor');
    }

    public function netural()
    {
        return view('netural');
    }

    public function province()
    {
        return view('province');
    }

    public function river()
    {
        return view('river');
    }
}