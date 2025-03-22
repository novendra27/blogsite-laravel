<?php

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

// Route for Home page fitur
Route::get('/', function () {
    return view('pages/home', [
        'title' => 'Home Page',
        'articles' => Article::with('author')->get(),
        'categories' => Category::take(7)->get(),
        'users' => User::where('role', 'author')->take(5)->get(),
    ]);
});

Route::get('/article/{slug}', function ($slug) {
    return view('pages/article', [
        'title' => 'Article Page',
        'article' => Article::where('slug', $slug)->first(),
    ]);
});

Route::get('/authors/{user:slug}', function (User $user) {
    return view('pages/articles-by', [
        'title' => 'Articles by ' . $user->name,
        'articles' => Article::where('user_id', $user->id)->get(),
    ]);
});

Route::get('/category/{category:slug}', function ($slug) {
    $category = Category::where('slug', $slug)->first();
    return view('pages/articles-by', [
        'title' => 'Articles By Category ' . $category->name,
        'articles' => Article::where('category_id', $category->id)->get(),
    ]);
});

// Route for Blog, About, and Contact page
Route::get('/blog', function () {
    return view('pages/blog', ['title' => 'Blog Page']);
});

Route::get('/about', function () {
    return view('pages/about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('pages/contact', ['title' => 'Contact Page']);
});
