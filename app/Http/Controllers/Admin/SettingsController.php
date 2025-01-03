<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class SettingsController extends Controller
{
    //

    public function index()
    {
        // Any logic you need for settings, e.g., fetching user data
        return view('settings.index'); // This is your settings Blade view
    }

    public function store(Request $request)
    {

       
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'contact_no' => 'required|numeric',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation for the logo
        ]);

        // If logo is uploaded, handle the upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public'); // Store logo in 'public/logos' folder
        } else {
            $logoPath = null;
        }
    // Insert the data into the 'settings' table
    DB::table('settings')->insert([
        'name' => $request->name,
        'contact_no' => $request->contact_no,
        'verification_password' => $request->verification_password,
        'lender_password' => $request->lender_password,
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    // Optionally, you can return a response or redirect
    return redirect()->route('settings.index')->with('success', 'Data stored successfully');

    }
}
