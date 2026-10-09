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

public function show(string $natural_feature)
{
    return view('naturalfeatures.show');
}

public function edit(string $natural_feature)
{
    return view('naturalfeatures.edit');
}
}
