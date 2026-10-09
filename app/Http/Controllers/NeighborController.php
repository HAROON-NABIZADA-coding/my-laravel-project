<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NeighborController extends Controller
{
       public function index()
{
    return view('neighbors.index');
}

public function create()
{
    return view('neighbors.create');
}

public function show(string $neighbor)
{
    return view('neighbors.show');
}

public function edit(string $neighbor)
{
    return view('neighbors.edit');
}
}
