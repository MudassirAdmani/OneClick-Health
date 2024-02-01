<?php

use App\Http\Controllers\AdminController;
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

// Home Route

// Default Route

Route::get('/', function () {
    return view('home.index');
});

// Contact Route

Route::get('/contact', function () {
    return view('home.contact');
});

// Dashboard Route

// Default Route

Route::get('/dash', function () {
    return view('dashboard.index');
});

// User Crud

// Fetch
Route::get('/showuser', [AdminController::class, 'showuser']);

// Add
Route::get('/adduser', function () {
    return view('dashboard.adduser');
});

// Create
Route::post('/createuser', [AdminController::class, 'createuser']);

// Delete
Route::get('/deleteuser/{id}', [AdminController::class, 'deleteuser']);

// Edit
Route::get('/edituser/{id}', [AdminController::class, 'edituser']);