<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

// Route::get('language/{locale}', function ($locale) {
//     if (in_array($locale, array_values(config('app.available_locales')))) {
//         app()->setLocale($locale);
//         Session::put('locale', $locale);
//     }
//     return redirect('/');
// });
// Redirect root to /en
Route::get('/', function () {
    return redirect('/en');
});

// Define routes for /en and /ar
Route::get('/en', function () {
    app()->setLocale('en');
    Session::put('locale', 'en');
    return view('welcome');
});

Route::get('/ar', function () {
    app()->setLocale('ar');
    Session::put('locale', 'ar');
    return view('welcome');
});

Route::get('/', function () {
    // Pass data to the view
    return view('welcome');
});
