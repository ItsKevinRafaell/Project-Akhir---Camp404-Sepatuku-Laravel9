<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BarangController;
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
    return view('beranda');
});

Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/katalog',[MenuController::class,'katalog']);
Route::get('/about', [MenuController::class,'about']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('barang', BarangController::class);

Route::get('/produk', [App\Http\Controllers\HomeController::class, 'katalog'])->name('katalog');

Route::get('/tentangkami', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
