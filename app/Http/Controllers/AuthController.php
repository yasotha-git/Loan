<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        session(['user_type' => 2]);
        return view('auth.login');
    }

    // Handle the login
    public function login(Request $request)
    {
       
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                session(['email' => $request->email]);
                $request->session()->regenerate();
                return redirect()->intended(route('enquiry.index'))->with('success', 'Login successful.');
            }

            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Log the error for debugging
            \Log::error('Login error: ' . $e->getMessage());

            // Return a generic error message to the user
            return back()->withErrors(['error' => 'Something went wrong. Please try again later.'])->withInput();
        }
    }

    // Show the login form
    public function adminshowLoginForm()
    {
        session(['user_type' => 1]); // Admin user
        return view('auth.login');
    }

    // Handle the login
    public function adminlogin(Request $request)
    {
        
        try {
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);

            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended(route('settings.index'))->with('success', 'Login successful.');
            }

            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Log the error for debugging
            \Log::error('Login error: ' . $e->getMessage());

            // Return a generic error message to the user
            return back()->withErrors(['error' => 'Something went wrong. Please try again later.'])->withInput();
        }
    }


    // Handle logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'))->with('success', 'You have been logged out.');
    }
}
