<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DesertController extends Controller
{
   public function index()
{
    return view('deserts.index');
}

public function create()
{
    return view('deserts.create');
}

public function show(string $desert)
{
    return view('deserts.show');
}

public function edit(string $desert)
{
    return view('deserts.edit');
}
}
