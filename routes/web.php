<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

// Dashboard Route: Accessible only by 'admin' and 'instructor'
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'role:admin|instructor'])
    ->name('dashboard');

// Profile Route: Accessible only by authenticated users
Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

// Courses Route: Accessible by all users
Route::get('/courses', function () {
    return view('courses');
})->name('courses');

// Blog Route: Accessible by all users
Route::get('/blog', function () {
    return view('blog');
})->name('blog');

// Contact Route: Accessible by all users
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Static Pages
Route::view('about', 'about')->name('about');
Route::view('resources', 'resources')->name('resources');
Route::view('login', 'login')->name('login');

// Include authentication routes
require __DIR__.'/auth.php';