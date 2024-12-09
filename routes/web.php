<?php

use App\Http\Controllers\LoanController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('layouts.frontend');
});

Route::get('/apply', [LoanController::class, 'apply'])->name('apply');


