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
    $title = 'Business Setup in Dubai | Company Formation in UAE | Aurega';
    $canonical_url = "https://www.auregacs.com";
    $meta_desc = "Your Gateway to Seamless Business Setup in UAE | Discover a seamless business setup experience in UAE with Aurega Group. Your trusted gateway to success.";
    return view('index', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/about', function () {
    $title = 'Aurega Corporate Services - About';
    $canonical_url = "https://www.auregacs.com/about";
    $meta_desc = "";
    return view('about', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/services', function () {
    $title = 'Aurega Corporate Services - Services Offer';
    $canonical_url = "https://www.auregacs.com/services";
    $meta_desc = "";
    return view('services', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/careers', function () {
    $title = 'Aurega Corporate Services - Careers';
    $canonical_url = "https://www.auregacs.com/careers";
    $meta_desc = "";
    return view('careers', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/contact', function () {
    $title = 'Aurega Corporate Services - Contact';
    $canonical_url = "https://www.auregacs.com/contact";
    $meta_desc = "";
    return view('contact', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/message', function () {
    $title = 'Aurega Corporate Services - Success';
    $canonical_url = "https://www.auregacs.com/message";
    $meta_desc = "";
    return view('message', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/services/company-incorporation-and-trade-license', function () {
    $title = 'Trade Licence in Dubai, UAE | Commercial License | UAE';
    $canonical_url = "https://www.auregacs.com/services/company-incorporation-and-trade-license";
    $meta_desc = "Unlock your business potential in Dubai with a streamlined business trade license in Dubai from Aurega Group. Take your business to the next level.";
    return view('services.company-incorporation', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/services/golden-visa', function () {
    $title = 'Golden Visa in Dubai | Residence Visa | Visa For Students';
    $canonical_url = "https://www.auregacs.com/services/golden-visa";
    $meta_desc = "Open doors to boundless opportunities with the Golden Visa Dubai. Let Aurega Group guide you towards a ten-year residency and golden visa for students.";
    return view('services.golden-visa', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/services/business-consulting', function () {
    $title = 'Business Setup Consultants in Dubai |Consulting Firm | UAE ';
    $canonical_url = "https://www.auregacs.com/services/business-consulting";
    $meta_desc = "Unleash Your Potential with Top-notch Business Setup Consultants in Dubai | Unlock new heights of success with the best Business Consultancy Services.";
    return view('services.business-consulting', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/services/accounting-and-book-keeping', function () {
    $title = 'Accounting Services in Dubai | Bookkeeping Services in UAE ';
    $canonical_url = "https://www.auregacs.com/services/accounting-and-book-keeping";
    $meta_desc = "Discover top-notch accounting and bookkeeping services at Aurega. Ensure financial accuracy and compliance for your business. Visit us now!";
    return view('services.accounting', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/services/pro-service', function () {
    $title = 'Best PRO Services in Dubai ,UAE | Corporate PRO Services';
    $canonical_url = "https://www.auregacs.com/services/pro-service";
    $meta_desc = "Streamline your success in Dubai with best PRO service in Dubai from Aurega Group. Navigate administrative processes with ease.Contact Us Now !";
    return view('services.pro', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/services/trademark-registration-and-intellectual-property', function () {
    $title = 'Trademark Registration Companies in UAE | Aurega';
    $canonical_url = "https://www.auregacs.com/services/trademark-registration-and-intellectual-property";
    $meta_desc = "Protect your intellectual property with Aurega's expert trademark registration services. Safeguard your assets and brand identity. Learn more!";
    return view('services.trademark', compact('title', 'canonical_url', 'meta_desc'));
});
Route::get('/registration', function () {
    $title = 'Aurega - Service Enquiry Form';
    $canonical_url = "https://www.auregacs.com/registration";
    $meta_desc = "";
    return view('registration', compact('title', 'canonical_url', 'meta_desc'));
});

Route::post('/email', [EmailController::class, 'email'])->name('contact.email');
Route::get('/demoemail', [EmailController::class, 'index'])->name('demo.email');
Route::get('/sitemap.xml', [EmailController::class, 'sitemap']);
Route::get('/robots.txt', [EmailController::class, 'robots']);