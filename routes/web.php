<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $array = config("products.products");

    return view('home', ['products' => $array]);
})->name('home');

Route::get('/uomo', function () {
    return view('uomo');
})->name('uomo');

Route::get('/donna', function () {
    return view('donna');
})->name('donna');

Route::get('/bambini', function () {
    return view('bambini');
})->name('bambini');
