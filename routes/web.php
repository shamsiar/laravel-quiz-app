<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

// Backend Controllers
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\QuestionController;

// Frontend Controllers
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/

// Auth::routes(['verify' => true]);
// Login Routes
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'verified']], function () {
    // Route::group(['middleware' => ['auth']], function () {
    Route::get('/tests', [PagesController::class, "tests"])->name('home');
    Route::get('/test/{id}', [PagesController::class, "viewTest"])->name('test.view');
    Route::get('/start-test/{id}', [PagesController::class, "startTest"])->name('test.start');
    Route::post('/test-result', [PagesController::class, "result"])->name('test.result');
    Route::get('/about-us', [PagesController::class, "aboutUs"])->name('about_us');
    Route::get('/profile', [PagesController::class, "profile"])->name('profile');
    Route::get('/certificate', [PagesController::class, "certificate"])->name('certificate');
    Route::post('/profile-update/{id}', [PagesController::class, "profileUpdate"])->name('profile.update');
});

// Email verification
Route::get('/email/verify', function () {
    return view('email.confirm');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/tests');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


// // Forget Password Routes
// Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
// Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [DashboardController::class, "dashboard"])->name('dashboard');
    Route::get('/test-results', [TestController::class, "testResults"])->name('test.results');
    Route::resource('users', UserController::class);
    Route::resource('tests', TestController::class);
    Route::resource('questions', QuestionController::class);
});
