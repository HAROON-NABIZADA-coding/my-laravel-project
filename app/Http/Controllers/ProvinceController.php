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

public function show(string $provinces)
{
    return view('deserts.show');
}

public function edit(string $provinces)
{
    return view('provinces.edit');
}
}
