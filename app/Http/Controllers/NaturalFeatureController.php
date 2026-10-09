<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NaturalFeatureController extends Controller
{
      public function index()
{
    return view('naturalfeatures.index');
}

public function create()
{
    return view('naturalfeatures.create');
}

public function show(string $naturalfeatures)
{
    return view('deserts.show');
}

public function edit(string $naturalfeatures)
{
    return view('naturalfeatures.edit');
}
}
