<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiverController extends Controller
{
        public function index()
{
    return view('rivers.index');
}

public function create()
{
    return view('rivers.create');
}

public function show(string $river)
{
    return view('rivers.show');
}

public function edit(string $river)
{
    return view('rivers.edit');
}
}
