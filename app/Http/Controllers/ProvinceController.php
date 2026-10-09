<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProvinceController extends Controller
{
         public function index()
{
    return view('provinces.index');
}

public function create()
{
    return view('provinces.create');
}
public function show(string $province)
{
    return view('provinces.show');
}

public function edit(string $province)
{
    return view('provinces.edit');
}
}
