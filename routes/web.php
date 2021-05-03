<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Testing Routes

// ubah sesuai dengan nama file yang Anda edit
// 
// CONTOH 1:
// Anda melakukan edit ke file login.blade.php
// maka
// Route::get('/testing', function () {
// return view('login');
// })->name("login");
// 
// CONTOH 2:
// Anda melakukan edit ke file dashboardStudent.blade.php
// maka
// Route::get('/testing', function () {
// return view('dashboardStudent');
// })->name("dashboardStudent");
// 
// 
// 
// 
// Akses link yang ditampilkan oleh php artisan serve tambahkan 'testing' di akhirnya
// 
// misalnya
// Starting Laravel development server: http://127.0.0.1:8000
// menjadi
// http://127.0.0.1:8000/testing
// 

Route::get('/testing', function () {
    return view('testing');
})->name("testing");




// Authenticated Routes



// Public Routes
Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::get('/register', function () {
    return view('register');
})->name("register");

  
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

