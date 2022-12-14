<?php

use App\Http\Controllers\SpesialisController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');

Route::get('admin/pasien', [App\Http\Controllers\AdminController::class, 'pasien'])->name('admin.pasien')->middleware('is_admin');

Route::get('admin/pasien', function (){
    return view ('pasien');
})->name('home')->middleware('auth');


Route::resource('spesialis', SpesialisController::class)->middleware('auth');

Route::get('/home/kamar', function (){
    return view ('kamar');
})->name('home')->middleware('auth');

Route::get('/home/dokter', function (){
    return view ('dokter');
})->name('home')->middleware('auth');

Route::get('/home/pendaftaran', function (){
    return view ('pendaftaran');
})->name('home')->middleware('auth');

Route::get('/home/periksa', function (){
    return view ('periksa');
})->name('home')->middleware('auth');

Route::get('/home/rawat', function (){
    return view ('rawat');
})->name('home')->middleware('auth');

Route::get('/home/pembayaran', function (){
    return view ('pembayaran');
})->name('home')->middleware('auth');

Route::get('/home/laporan', function (){
    return view ('laporan');
})->name('home')->middleware('auth');