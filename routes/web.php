<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// login route

Route::get('/redirect', function () {
    return view('home.index');
});

// default route

Route::get('/', function () {
    return view('home.index');
});

// dashboard route

Route::get('/dash', function () {
    return view('dashboard.index');
});

// Home Route

Route::get('/home', function () {
    return view('home.index');
});

// Contact Route

Route::get('/contact', function () {
    return view('home.contact');
});
