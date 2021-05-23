<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KelasController;

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
    return view('halaman-utama');
});

Route::get('/testing1', function () {
    return view('Class/class-join');
})->name('class-join');

Route::get('/testing2', function () {
    return view('Class/kelas-join');
})->name('kelas-join');



// Authenticated Routes

Route::get('/', [KelasController::class, 'index'])->name('home');
Route::get('/kelas/{$id}', [KelasController::class, 'show'])->middleware('auth')->name('kelas.show');
Route::get('/kelas/{$id}/topic', [KelasController::class, 'showTopic'])->middleware('auth')->name('kelas.show.topic');
Route::get('/kelas/{$id}/video', [KelasController::class, 'showVideo'])->middleware('auth')->name('kelas.show.video');
Route::get('/kelas/{$id}/kuis', [KelasController::class, 'showKuis'])->middleware('auth')->name('kelas.show.kuis');

Route::get('/kelas-buat', [KelasController::class, 'create'])->middleware('auth')->name('kelas.create');
Route::post('/kelas-buat', [KelasController::class, 'store'])->middleware('auth')->name('kelas.store');

Route::get('/kelas-buat/{$id}', [KelasController::class, 'createTopic'])->middleware('auth')->name('kelas.create.topic');
Route::get('/kelas-buat/{$id}', [KelasController::class, 'createVideo'])->middleware('auth')->name('kelas.create.video');
Route::get('/kelas-buat/{$id}', [KelasController::class, 'createKuis'])->middleware('auth')->name('kelas.create.kuis');
Route::post('/kelas-buat/{$id}', [KelasController::class, 'storeFile'])->middleware('auth')->name('kelas.store.file');


// Public Routes
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

Route::get('/auth', [AuthController::class, 'authCreate'])->name('auth');  
Route::get('/register', [AuthController::class, 'registerCreate'])->name('register.create');
Route::get('/login', [AuthController::class, 'loginCreate'])->name('login.create');
Route::get('/success', [AuthController::class, 'successCreate'])->name('success.create');

Route::post('/register', [AuthController::class, 'register'])->name('register.store');
Route::post('/login', [AuthController::class, 'login'])->name('login.store');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

