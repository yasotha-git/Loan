<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    function apply() {
        return view('apply');
    }

    function terms() {
        return view('terms');
    }

    function faq() {
        return view('faq');
    }
    function fees() {
        return view('fees');
    }
    function privacy() {
        return view('privacy');
    }
    //
}
