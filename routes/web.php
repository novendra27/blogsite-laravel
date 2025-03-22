<?php

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/home', [
        'title' => 'Home Page',
        'articles' => Article::with('author')->get(),
        'categories' => Category::take(7)->get(),
        'users' => User::where('role', 'author')->take(5)->get(),
    ]);
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
