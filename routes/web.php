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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/careers', function () {
    return view('careers');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aurega-company-incorporation', function () {
    return view('company-incorporation');
});
Route::get('/aurega-golden-visa', function () {
    return view('golden-visa');
});
Route::get('/aurega-management-consulting', function () {
    return view('management-consulting');
});
