<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home', ['tittle' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('pages/blog', ['tittle' => 'Blog Page']);
});

Route::get('/about', function () {
    return view('pages/about', ['tittle' => 'About Page']);
});

Route::get('/contact', function () {
    return view('pages/contact', ['tittle' => 'Contact Page']);
});
