<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cv-en', function () {
    return view('mycv');
});
Route::get('/cv-ar', function () {
    return view('mycv-ar');
});

