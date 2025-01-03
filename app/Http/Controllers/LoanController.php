<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Mail\ApplicationSubmitted;
use App\Mail\PasswordResetMail;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class LoanController extends Controller
{
    function apply()
    {
        return view('apply');
    }

    function terms()
    {
        return view('terms');
    }

    function faq()
    {
        return view('faq');
    }
    function fees()
    {
        return view('fees');
    }
    function privacy()
    {
        return view('privacy');
    }
    function verification()
    {
        return view('verification');
    }
    function resetpassword()
    {
        return view('passwordreset');
    }

    public function register(Request $request)
    {
        $password = $request->input('post_password');
    
        // Validate the password
        if ($password === '916') {
            // Password is correct, return the view
            return view('register');
        } else {
            // Incorrect password, return to the same page with an error message
            return redirect()->back()->withErrors(['post_password' => 'Incorrect password.']);
        }
    }

    function lenders()
    {
        return view('lenders');
    }


    public function applySubmit(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'mobile' => 'required|digits:10',
            'email' => 'required|email|unique:enquiry_details,email',
            'amount' => 'required|numeric',
        ]);

        // Store other data in the database
        $loanApplication = new Enquiry();
        $loanApplication->name = $validatedData['name'];
        $loanApplication->email = $validatedData['email'];
        $loanApplication->phone = $validatedData['mobile'];
        $loanApplication->loan_amount = $validatedData['amount'];
        $loanApplication->save();

        Mail::to($request->email)->send(new ApplicationSubmitted($loanApplication));

        return redirect()->back()->with('success', 'Loan application submitted successfully!');
    }
    public function resetpasswordSubmit(Request $request)
    {
        // Validate the input
        $request->validate([
            'username_b' => 'required|string',
        ]);

        // Find the user by email or username
        $user = User::where('email', $request->username_b)
            ->orWhere('name', $request->username_b)
            ->first();
        if (!$user) {
            return redirect()->back()->with('error', 'User not found. Please check the email or username.');
        }

        // Generate a new password
        $newPassword = Str::random(6); // Generate a random 10-character password

        // Update the user's password
        $user->password = bcrypt($newPassword);
        $user->original_password = $newPassword;
        $user->save();

        // Send the new password via email
        Mail::to($user->email)->send(new PasswordResetMail($user, $newPassword));

        return redirect()->back()->with('success', 'Your new password has been sent to your email address.');
    }

    //
}
