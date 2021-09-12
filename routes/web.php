<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
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

//Course routes End
Route::get('/shop',[WelcomeController::class, 'shop'])->name('shop');
Route::get('/shop/edublock',[WelcomeController::class, 'edublock'])->name('shop.edublock');
Route::get('/shop/schoolofiot',[WelcomeController::class, 'schoolofiot'])->name('shop.schoolofiot');

//Press Release routes End
Route::get('/pressrelease', [WelcomeController::class, 'pressrelease'])->name('pressrelease');
Route::get('/pressrelease/press1', [WelcomeController::class, 'press1'])->name('pressrelease.press1');
Route::get('/pressrelease/press2', [WelcomeController::class, 'press2'])->name('pressrelease.press2');
Route::get('/pressrelease/press3', [WelcomeController::class, 'press3'])->name('pressrelease.press3');

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
    Route::get('/user/profile', [UserController::class, 'profileForm'])->name('user.profile');
    Route::post('/user/profile', [UserController::class, 'profileUpdate'])->name('user.profile');
    Route::get('/user/changepassword', [UserController::class, 'changePasswordForm'])->name('user.changepassword');
    Route::post('/user/changepassword', [UserController::class, 'changePassword'])->name('user.changepassword');

    Route::get('/order', [UserController::class, 'orderForm'])->name('orderform');
    Route::post('/order', [UserController::class, 'orderPlace'])->name('orderform');
});



