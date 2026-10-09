<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\DesertController;
use App\Http\Controllers\MountainController;
use App\Http\Controllers\RiverController;
use App\Http\Controllers\NeighborController;
use App\Http\Controllers\NaturalFeatureController;
Route::resource('provinces', ProvinceController::class);

Route::resource('deserts', DesertController::class);

Route::resource('mountains', MountainController::class);

Route::resource('rivers', RiverController::class);

Route::resource('neighbors', NeighborController::class);

Route::resource('naturalfeatures', NaturalFeatureController::class);


Route::resource('provinces', ProvinceController::class);
Route::resource('deserts', DesertController::class);
Route::resource('mountains', MountainController::class);
Route::resource('rivers', RiverController::class);
Route::resource('neighbors', NeighborController::class);
Route::resource('natural-features', NaturalFeatureController::class);



Route::get('/', [PageController::class, 'home'])
    ->name('home');

Route::get('/contact', [PageController::class, 'contact'])
    ->name('contact');

Route::get('/desert', [PageController::class, 'desert'])
    ->name('desert');

Route::get('/mountain', [PageController::class, 'mountain'])
    ->name('mountain');

Route::get('/neighbor', [PageController::class, 'neighbor'])
    ->name('neighbor');

Route::get('/netural', [PageController::class, 'netural'])
    ->name('netural');

Route::get('/province', [PageController::class, 'province'])
    ->name('province');

Route::get('/river', [PageController::class, 'river'])
    ->name('river');
