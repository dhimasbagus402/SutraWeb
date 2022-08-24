<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/blog', function () {
    return view('blogs.blog');
});

Route::get('/tambahblog', function () {
    return view('blogs.tambahblog');
});

//AUTH
Auth::routes();

Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

Route::resource('blogs', BlogController::class);
Route::resource('adminpanel', BlogController::class);
Route::resource('jamaahs', JamaahController::class);

//Admin View
Route::get('/jamaah','App\Http\Controllers\JamaahController@index');
Route::get('/dashboard', 'App\Http\Controllers\BlogController@index');

//Main View
Route::get('/', 'App\Http\Controllers\JamaahController@utama');
Route::get('/blog', 'App\Http\Controllers\BlogController@index');
