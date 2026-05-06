<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/catalogo', function () {
    return view('catalogo');
});

Route::get('/ubicacion', function () {
    return view('ubicacion');
});
