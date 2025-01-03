<?php

use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.frontend');
});

Route::get('/apply', [LoanController::class, 'apply'])->name('apply');
Route::get('/terms', [LoanController::class, 'terms'])->name('terms');
Route::get('/faq', [LoanController::class, 'faq'])->name('faq');
Route::get('/fees', [LoanController::class, 'fees'])->name('fees');
Route::get('/privacy', [LoanController::class, 'privacy'])->name('privacy');


