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
    $meta_keywords = "business setup dubai, company formation in dubai, business set up in uae, company setup dubai, business setup uae, business setup services in dubai, business set up companies in uae, business setup in dubai uae";
    return view('index', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/about', function () {
    $title = 'Aurega Corporate Services - About';
    $canonical_url = "https://www.auregacs.com/about";
    $meta_desc = "About Aurega Corporate Services in Dubai UAE";
    $meta_keywords = "";
    return view('about', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/services', function () {
    $title = 'Aurega Corporate Services - Services Offerred';
    $canonical_url = "https://www.auregacs.com/services";
    $meta_desc = "Aurega Corporate Services - Services Offerred";
    $meta_keywords = "";
    return view('services', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/careers', function () {
    $title = 'Aurega Corporate Services - Careers';
    $canonical_url = "https://www.auregacs.com/careers";
    $meta_desc = "Aurega Corporate Services - Careers in Dubai UAE";
    $meta_keywords = "";
    return view('careers', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/contact', function () {
    $title = 'Aurega Corporate Services - Contact in Dubai UAE';
    $canonical_url = "https://www.auregacs.com/contact";
    $meta_desc = "Aurega Corporate Services - Contact";
    $meta_keywords = "";
    return view('contact', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/message', function () {
    $title = 'Aurega Corporate Services - Success';
    $canonical_url = "https://www.auregacs.com/message";
    $meta_desc = "Message";
    $meta_keywords = "";
    return view('message', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/services/company-incorporation-and-trade-license', function () {
    $title = 'Trade Licence in Dubai, UAE | Commercial License | UAE';
    $canonical_url = "https://www.auregacs.com/services/company-incorporation-and-trade-license";
    $meta_desc = "Unlock your business potential in Dubai with a streamlined business trade license in Dubai from Aurega Group. Take your business to the next level.";
    $meta_keywords = "trade licence in dubai, business license in dubai, commercial license in dubai, dubai business license, online business license dubai, trading licence in uae";
    return view('services.company-incorporation', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/services/golden-visa', function () {
    $title = 'Golden Visa in Dubai | Residence Visa | Visa For Students';
    $canonical_url = "https://www.auregacs.com/services/golden-visa";
    $meta_desc = "Open doors to boundless opportunities with the Golden Visa Dubai. Let Aurega Group guide you towards a ten-year residency and golden visa for students.";
    $meta_keywords = "golden visa requirements uae, golden visa dubai, golden visa in uae, golden visa for students, golden residency uae";
    return view('services.golden-visa', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/services/business-consulting', function () {
    $title = 'Business Setup Consultants in Dubai |Consulting Firm | UAE ';
    $canonical_url = "https://www.auregacs.com/services/business-consulting";
    $meta_desc = "Unleash Your Potential with Top-notch Business Setup Consultants in Dubai | Unlock new heights of success with the best Business Consultancy Services.";
    $meta_keywords = "business setup consultants in dubai, business consultancy services dubai, business setup consultants in uae";
    return view('services.business-consulting', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/services/accounting-and-book-keeping', function () {
    $title = 'Accounting Services in Dubai | Bookkeeping Services in UAE ';
    $canonical_url = "https://www.auregacs.com/services/accounting-and-book-keeping";
    $meta_desc = "Discover top-notch accounting and bookkeeping services at Aurega. Ensure financial accuracy and compliance for your business. Visit us now!";
    $meta_keywords = "accounting services in dubai, accounting companies in dubai, accounting and bookkeeping services";
    return view('services.accounting', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/services/pro-service', function () {
    $title = 'Best PRO Services in Dubai ,UAE | Corporate PRO Services';
    $canonical_url = "https://www.auregacs.com/services/pro-service";
    $meta_desc = "Streamline your success in Dubai with best PRO service in Dubai from Aurega Group. Navigate administrative processes with ease.Contact Us Now !";
    $meta_keywords = "pro services dubai, best pro services in dubai, pro services in uae, pro services in abu dhabi, corporate pro services, pro company in uae, pro services in ajman";
    return view('services.pro', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/services/trademark-registration-and-intellectual-property', function () {
    $title = 'Trademark Registration Companies in UAE | Aurega';
    $canonical_url = "https://www.auregacs.com/services/trademark-registration-and-intellectual-property";
    $meta_desc = "Protect your intellectual property with Aurega's expert trademark registration services. Safeguard your assets and brand identity. Learn more!";
    $meta_keywords = "trademark registration uae, trademark registration in dubai, trademark registration companies in uae";
    return view('services.trademark', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});
Route::get('/registration', function () {
    $title = 'Aurega - Service Enquiry Form';
    $canonical_url = "https://www.auregacs.com/registration";
    $meta_desc = "Aurega - Service Enquiry Form";
    $meta_keywords = "";
    return view('registration', compact('title', 'canonical_url', 'meta_desc', 'meta_keywords'));
});

Route::post('/email', [EmailController::class, 'email'])->name('contact.email');
Route::get('/demoemail', [EmailController::class, 'index'])->name('demo.email');
Route::get('/sitemap.xml', [EmailController::class, 'sitemap']);
Route::get('/robots.txt', [EmailController::class, 'robots']);