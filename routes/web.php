<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('pages/blog', ['title' => 'Blog Page']);
});

Route::get('/about', function () {
    return view('pages/about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('pages/contact', ['title' => 'Contact Page']);
});
