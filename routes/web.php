<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/catalogo', function () {
    return view('catalogo');
})->name('catalogo');

Route::get('/ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion');

Route::fallback(function () {
    return redirect()->route('home');
});