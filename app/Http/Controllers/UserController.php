<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Carbon\Carbon;



class UserController extends Controller
{
    // List all users
    public function index()
    {
        $users = User::where('delete_status', 0)->get();
        return view('userlist', compact('users'));
    }

   // Show form to add a new user
public function create()
{
    $roles = Role::all(); // Fetch all roles
    return view('useradd', compact('roles'));
}

public function store(Request $request)
{   
    try {
        // Validate the incoming request
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email', // Ensure email is unique in the 'users' table
        'mobileno' => 'required|string',
        'address' => 'required|string',
        'dob' => 'required|date',
        'role_id' => 'required|exists:roles,id', // Validate role_id exists in roles table
        'status' => 'required|boolean',
        'password' => 'required|string|min:6', // Password validation
    ]);

    // Hash the password for storage
    $hashedPassword = Hash::make($request->password);

    // Create the user
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->mobileno,
        'address' => $request->address,
        'dob' => $request->dob,
        'role_id' => $request->role_id, // Store role_id
        'status' => $request->status,
        'password' => $hashedPassword, // Store the hashed password
        'original_password' => $request->password, // Optionally store original password if required
    ]);

    // Redirect to the user list page with a success message
    return redirect()->route('users.index')->with('success', 'User created successfully.');
    } catch (\Throwable $th) {
       dd($th->getMessage());
    }
    
}




    public function edit($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);
        
        // Return the edit view with the user data
        return view('useredit', compact('user'));
    }
    

    public function update(Request $request, $id)
{
    
    // Validate the incoming data
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email,' . $id,
        'mobileno' => 'required|string',
        'address' => 'required|string',
        'dob' => 'required|date',
        'role_id' => 'required|in:1,2', // Change validation to 'role_id'
        'status' => 'required|boolean',
        // Add other fields and validation rules as necessary
    ]);

    // Find the user by ID
    $user = User::findOrFail($id);

    // Update the user with validated data
    $user->update($validated);

    // Redirect back to the user list with a success message
    return redirect()->route('users.index')->with('success', 'User updated successfully.');
}




    // Delete a user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete_status = 1;
        $user->deleted_at = Carbon::now();  // Set the current date and time for deletion
        $user->save();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
