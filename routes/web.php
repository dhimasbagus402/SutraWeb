<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JamaahController;
use App\Http\Controllers\MainViewController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogShowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\CommentController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

use App\Http\Controllers\UploadImagesController;
 
Route::get('/upload-multiple-image-preview', [UploadImagesController::class, 'index']);
 
Route::post('/upload-multiple-image-preview', [UploadImagesController::class, 'store']);



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
Route::get('/', 'App\Http\Controllers\MainViewController@utama');
Route::get('/about', 'App\Http\Controllers\MainViewController@banerabout');
Route::get('/contact', 'App\Http\Controllers\MainViewController@banercontact');
Route::get('/services', 'App\Http\Controllers\MainViewController@banerservices');
Route::get('/blog', 'App\Http\Controllers\BlogShowController@index2');

Route::post('/comment/store', 'App\Http\Controllers\CommentController@store')->name('comments.store');
Route::post('/reply/store', 'App\Http\Controllers\CommentController@replyStore')->name('reply.add');


//AUTH
Auth::routes();

//Main View
Route::middleware(['auth', 'user-access:user'])->group(function () {
  
    Route::get('/home', 'App\Http\Controllers\Auth\LoginController@index');
    Route::get('/home', 'App\Http\Controllers\MainViewController@utama');
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

    Route::resource('blogs', BlogController::class);
    Route::get('/tambahblog', 'App\Http\Controllers\BlogController@tambah');

    Route::resource('images', ViewController::class);
    Route::get('/views', 'App\Http\Controllers\ViewController@index');
    Route::get('/tambah', 'App\Http\Controllers\ViewController@tambah');

    Route::get('/jamaah','App\Http\Controllers\JamaahController@index');
    Route::get('/jamaahs/{jamaah}/edit','App\Http\Controllers\JamaahController@index');
    Route::resource('jamaahs', JamaahController::class);

    Route::resource('adminpanel', BlogController::class);
});
  
/*------------------------------------------
--------------------------------------------
All Manager Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {
  
    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});

Route::resource('blogs', BlogController::class)->only([
    'show'
]);