<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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