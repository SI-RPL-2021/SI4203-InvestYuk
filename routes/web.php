<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
    return view('Class/class');
});

Route::get('/testing1', function () {
    return view('Class/class-join');
})->name('class-join');

Route::get('/testing2', function () {
    return view('Class/kelas-join');
})->name('kelas-join');



// Authenticated Routes



// Public Routes
Route::get('/', function () {
    return view('home');
});
  
Route::get('/register', [AuthController::class, 'registerCreate'])->name('register.create');
Route::get('/login', [AuthController::class, 'loginCreate'])->name('login.create');

Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

