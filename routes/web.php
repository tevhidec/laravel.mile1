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

//doorverwijzen
Route::get('/', function () {
    return view('welcome');
});

//about
Route::get('/about', function () {
    return view('about');
    
});

//test
Route::get('/test', function () {
    return view('test');
});

//header
Route::get('header', function () {
    return view('header');
});

//footer
Route::get('footer', function () {
    return view('footer');
});

Route::get('/template', function () {
    return view('template');
});


Auth::routes();

Route::get('/', [App\Http\Controllers\PostController::class, 'index'])->name('index');

