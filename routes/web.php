<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Models\Enquiry;

// Public routes
Route::get('/', function () {
    return view('layouts.frontend');
})->name('home');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::get('admin/login', [AuthController::class, 'adminshowLoginForm'])->name('adminlogin');
Route::post('admin/login', [AuthController::class, 'adminlogin'])->name('adminlogin.submit');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware('auth')->group(function () {
    // Dashboard route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
// Routes protected by the auth middleware
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard'); // Replace with your dashboard view
//     })->name('dashboard');

// Loan-related routes
Route::get('/apply', [LoanController::class, 'apply'])->name('apply');
Route::post('/applySubmit', [LoanController::class, 'applySubmit'])->name('applySubmit');
Route::get('/terms', [LoanController::class, 'terms'])->name('terms');
Route::get('/faq', [LoanController::class, 'faq'])->name('faq');
Route::get('/fees', [LoanController::class, 'fees'])->name('fees');
Route::get('/privacy', [LoanController::class, 'privacy'])->name('privacy');
Route::get('/verification', [LoanController::class, 'verification'])->name('verification');
Route::get('/resetpassword', [LoanController::class, 'resetpassword'])->name('resetpassword');
Route::post('/resetpasswordSubmit', [LoanController::class, 'resetpasswordSubmit'])->name('resetpasswordSubmit');
Route::post('/register', [LoanController::class, 'register'])->name('register');
Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
Route::post('/settings/store', [SettingsController::class, 'store'])->name('settings.store');
Route::get('/enquiry', [EnquiryController::class, 'index'])->name('enquiry.index');
Route::get('/get-user-info', [EnquiryController::class, 'getUserInfo']);
Route::post('/update-enquiry', [EnquiryController::class, 'updateEnquiry']);
Route::post('/userupdate-enquiry', [EnquiryController::class, 'userupdateEnquiry']);
Route::get('/get-enquiry-details', [EnquiryController::class, 'getEnquiryDetails']);
Route::get('/get-adminenquiry-details', [EnquiryController::class, 'admingetEnquiryDetails']);
Route::get('/lenders', [LoanController::class, 'lenders'])->name('lenders');



// User management routes
Route::prefix('users')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index'); // List users
    Route::get('/create', [UserController::class, 'create'])->name('users.create'); // Add user form
    Route::post('/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit'); // Edit user form
    Route::put('/{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{id}', [UserController::class, 'destroy'])->name('users.destroy'); // Delete user
});


