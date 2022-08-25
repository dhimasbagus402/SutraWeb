<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Auth\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/blog', function () {
    return view('pages.blog');
});


//Main View
Route::get('/', 'App\Http\Controllers\JamaahController@utama');
Route::get('/blog', 'App\Http\Controllers\BlogController@index2');

//AUTH
Auth::routes();

//Main View
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', 'App\Http\Controllers\Auth\LoginController@index');
    Route::get('/home', 'App\Http\Controllers\JamaahController@utama');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  //Admin Dashboard
    Route::get('/dashboard','App\Http\Controllers\Auth\LoginController@adminHome');
    Route::get('/dashboard', 'App\Http\Controllers\BlogController@index');
    Route::get('/tambahblog', 'App\Http\Controllers\BlogController@tambah');
    Route::get('/jamaah','App\Http\Controllers\JamaahController@index');
    Route::get('/jamaahs/{id}/edit','App\Http\Controllers\JamaahController@index');
    Route::resource('blogs', BlogController::class);
});
  
/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

Route::resource('adminpanel', BlogController::class);
Route::resource('jamaahs', JamaahController::class);