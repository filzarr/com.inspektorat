<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post', function () {
    return view('post');
});
Route::get('/irban', function () {
    return view('irban');
});
Route::get('/ppid', function () {
    return view('ppid');
});
Route::get('/informasi', function () {
    return view('informasi');
});
Route::get('/form', function () {
    return view('forminformasi');
});
Route::get('/saberpungli', function () {
    return view('saberpungli');
});
