<?php

use App\Http\Controllers\InsuranceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

// Membership Route

Route::get('/membership', function () {
    return view('dashboard.membership');
});

// User Crud

// Fetch
Route::get('/showuser', [UserController::class, 'showuser']);

// Add
Route::get('/adduser', function () {
    return view('dashboard.adduser');
});

// Create
Route::post('/createuser', [UserController::class, 'createuser']);

// Delete
Route::get('/deleteuser/{id}', [UserController::class, 'deleteuser']);

// Edit
Route::get('/edituser/{id}', [UserController::class, 'edituser']);

// Update
Route::post('/updateuser/{id}', [UserController::class, 'updateuser']);

// Product Crud

// Fetch
Route::get('/showproduct', [ProductController::class, 'showproduct']);

// Add
Route::get('/addproduct', function () {
    return view('dashboard.addproduct');
});

// Create
Route::post('/createproduct', [ProductController::class, 'createproduct']);

// Delete
Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteproduct']);

// Edit
Route::get('/editproduct/{id}', [ProductController::class, 'editproduct']);

// Update
Route::post('/updateproduct/{id}', [ProductController::class, 'updateproduct']);

// Insurance Crud

// Add
Route::get('/addinsurance/{plan}', [InsuranceController::class, 'addinsurance']);
