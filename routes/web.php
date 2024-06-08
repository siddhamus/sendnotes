<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    

    

    Route::get('/courses', function () {
        // Add your logic for courses page
        return view('courses');
    })->name('courses');
    
    Route::get('/blog', function () {
        // Add your logic for blog page
        return view('blog');
    })->name('blog');
    
    Route::get('/contact', function () {
        // Add your logic for contact page
        return view('contact');
    })->name('contact');
    
    Route::view('about', 'about')->name('about');
    Route::view('resources', 'resources')->name('resources');
    Route::view('login', 'login')->name('login');

require __DIR__.'/auth.php';
