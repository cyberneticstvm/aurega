<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;

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
    $title = 'Business Setup and Golden Visa in Dubai and UAE '.date('Y');
    return view('index', compact('title'));
});
Route::get('/about', function () {
    $title = 'Aurega Corporate Services - About';
    return view('about', compact('title'));
});
Route::get('/services', function () {
    $title = 'Aurega Corporate Services - Services Offer';
    return view('services', compact('title'));
});
Route::get('/careers', function () {
    $title = 'Aurega Corporate Services - Careers';
    return view('careers', compact('title'));
});
Route::get('/contact', function () {
    $title = 'Aurega Corporate Services - Contact';
    return view('contact', compact('title'));
});
Route::get('/services/company-incorporation-and-trade-license', function () {
    $title = 'Aurega - Company Incorporation and Trade Licenses';
    return view('services.company-incorporation', compact('title'));
});
Route::get('/services/golden-visa', function () {
    $title = 'Aurega - Golden Visa';
    return view('services.golden-visa', compact('title'));
});
Route::get('/services/business-consulting', function () {
    $title = 'Aurega - Business Consulting';
    return view('services.business-consulting', compact('title'));
});
Route::get('/services/accounting-and-book-keeping', function () {
    $title = 'Aurega - Accounting and Book-keeping';
    return view('services.accounting', compact('title'));
});
Route::get('/services/pro-service', function () {
    $title = 'Aurega - PRO Services';
    return view('services.pro', compact('title'));
});
Route::get('/services/trademark-registration-and-intellectual-property', function () {
    $title = 'Aurega - trademark Registration and Intellectual Property';
    return view('services.trademark', compact('title'));
});

Route::post('/email', [EmailController::class, 'email'])->name('contact.email');