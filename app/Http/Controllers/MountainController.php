<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MountainController extends Controller
{
   public function index()
{
    return view('mountains.index');
}

public function create()
{
    return view('mountains.create');
}

public function show(string $mountain)
{
    return view('mountains.show');
}

public function edit(string $mountain)
{
    return view('mountains.edit');
}
}
