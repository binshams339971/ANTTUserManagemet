<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SslCommerzPaymentController;
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

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//All routes starts here

Route::get('/', [WelcomeController::class, 'home'])->name('home');

//Course routes starts
Route::get('/course', [WelcomeController::class, 'course'])->name('course');
Route::get('/course/basicarduino', [WelcomeController::class, 'basicarduino'])->name('course.basicarduino');
Route::get('/course/programmingkids', [WelcomeController::class, 'programmingkids'])->name('course.programmingkids');
Route::get('/course/scratchprograms', [WelcomeController::class, 'scratchprograms'])->name('course.scratchprograms');
Route::get('/course/arduinowithtinkercad', [WelcomeController::class, 'arduinowithtinkercad'])->name('course.arduinowithtinkercad');
Route::get('/course/basicrobotics', [WelcomeController::class, 'basicrobotics'])->name('course.basicrobotics');
Route::get('/course/buildgames', [WelcomeController::class, 'buildgames'])->name('course.buildgames');
Route::get('/course/soccerrobot', [WelcomeController::class, 'soccerrobot'])->name('course.soccerrobot');
Route::get('/course/iotcar', [WelcomeController::class, 'iotcar'])->name('course.iotcar');

//Shop routes
Route::get('/shop',[WelcomeController::class, 'shop'])->name('shop');
Route::get('/shop/edublock',[WelcomeController::class, 'edublock'])->name('shop.edublock');
Route::get('/shop/schoolofiot',[WelcomeController::class, 'schoolofiot'])->name('shop.schoolofiot');
Route::get('/edublockdigitalmanual',[WelcomeController::class, 'edublockdigitalmanual'])->name('edublockdigitalmanual');
Route::get('/edublockdigitalmanual/book',[WelcomeController::class, 'edublockdigitalmanualBook'])->name('edublockdigitalmanualbook');
Route::get('/edublockdigitalmanual/apk',[WelcomeController::class, 'apkDownload'])->name('apkdownload');

//Press Release routes
Route::get('/pressrelease', [WelcomeController::class, 'pressrelease'])->name('pressrelease');
Route::get('/pressrelease/press1', [WelcomeController::class, 'press1'])->name('pressrelease.press1');
Route::get('/pressrelease/press2', [WelcomeController::class, 'press2'])->name('pressrelease.press2');
Route::get('/pressrelease/press3', [WelcomeController::class, 'press3'])->name('pressrelease.press3');
Route::get('/pressrelease/press4', [WelcomeController::class, 'press4'])->name('pressrelease.press4');

//Register routes
Route::get('/register', [UserController::class, 'registerForm'])->name('register')->middleware('checklogin');
Route::post('/register', [UserController::class, 'register'])->name('register');
Route::get('/login', [UserController::class, 'loginForm'])->name('login')->middleware('checklogin');
Route::post('/login', [UserController::class, 'login'])->name('login');


//Solution routes
Route::get('/solution', [WelcomeController::class, 'solution'])->name('solution');

//Coditions routes
Route::get('/terms-and-conditions', [WelcomeController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('/refund-policy', [WelcomeController::class, 'refundPolicy'])->name('refund-policy');
Route::get('/privacy-policy', [WelcomeController::class, 'privacyPolicy'])->name('privacy-policy');

//User routes
Route::group(['middleware' => 'authuser'], function () {
    Route::get('/home', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/user/order', [UserController::class, 'allorder'])->name('allorder');
    Route::get('/user/payment-history', [UserController::class, 'paymentHistory'])->name('payment');
    Route::get('/user/profile', [UserController::class, 'profileForm'])->name('user.profile');
    Route::post('/user/profile', [UserController::class, 'profileUpdate'])->name('user.profile');
    Route::get('/user/changepassword', [UserController::class, 'changePasswordForm'])->name('user.changepassword');
    Route::post('/user/changepassword', [UserController::class, 'changePassword'])->name('user.changepassword');

    Route::get('/order', [UserController::class, 'orderForm'])->name('orderform');
    Route::post('/order', [UserController::class, 'orderPlace'])->name('orderform');
});

//Social Login
Route::get('/login/google', [UserController::class, 'redirectToGoogle'])->name('google');
Route::get('/login/google/callback', [UserController::class, 'googleLogin']);

Route::get('/login/facebook', [UserController::class, 'redirectToFacebook'])->name('facebook');
Route::get('/login/facebook/callback', [UserController::class, 'facebookLogin']);


//Admin
Route::get('/admin/login', [AdminController::class, 'adminLoginForm'])->name('admin.login')->middleware('checkadminlogin');
Route::post('/admin/login', [AdminController::class, 'adminLogin'])->name('admin.login');

Route::group(['middleware' => 'authadmin'], function () {
    Route::get('/admin/home', [AdminController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/allorder', [AdminController::class, 'allOrders'])->name('admin.allorder');
    Route::get('/admin/payment-history', [AdminController::class, 'payments'])->name('admin.payments');
    Route::get('/admin/changepassword', [AdminController::class, 'adminChangePasswordForm'])->name('admin.changepassword');
    Route::post('/admin/changepassword', [AdminController::class, 'adminChangePassword'])->name('admin.changepassword');
    Route::get('/admin/newadmin', [AdminController::class, 'addNewAdminForm'])->name('admin.newadmin');
    Route::post('/admin/newadmin', [AdminController::class, 'addNewAdmin'])->name('admin.newadmin');
    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');
});


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/user/payment', [SslCommerzPaymentController::class, 'exampleHostedCheckout'])->name('paynow');

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END


//Footer Content routes
Route::get('/about-us', [WelcomeController::class, 'aboutus'])->name('aboutus');
Route::get('/team', [WelcomeController::class, 'team'])->name('team');
Route::get('/comunity', [WelcomeController::class, 'comunity'])->name('comunity');
Route::get('/partnership', [WelcomeController::class, 'partnership'])->name('partnership');
Route::post('/partnership', [WelcomeController::class, 'partnershipSave'])->name('partnership');
Route::get('/career', [WelcomeController::class, 'career'])->name('career');
Route::get('/faq', [WelcomeController::class, 'faq'])->name('faq');
Route::get('/lms-faq', [WelcomeController::class, 'lmsFaq'])->name('lms-faq');


