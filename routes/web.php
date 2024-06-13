<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog/about', function () {
    return view('about');
});

Route::get('/blog/portofolio', function () {
    return view('portofolio');
});

Route::get('/blog/kontak', function () {
    return view('kontak');
});
