<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    // public function index()
    // {
    //     $userEmail = session('email');
    //     $usertype = session('user_type');

       
    //     // Retrieve all records from the 'enquiry_details' table
    //     if($usertype == 1) {
    //         $enquiries = DB::table('enquiry_details')->simplePaginate(10);  // Using pagination here
    //         return view('enquiry.index', compact('enquiries', 'userEmail'));

    //     }elseif ($usertype == 2 ) {
    //         $getuser = User::where('email', $userEmail)->first();
    //         // $getuser_id = Enquiry::where('assignee', $getuser->id)->first();
    //         $enquiries = DB::table('enquiry_details')->where('assignee', $getuser->id)->simplePaginate(10);
    //         return view('enquiry.adminindex', compact('enquiries', 'userEmail'));

    //     } else{
    //         $enquiries = DB::table('enquiry_details')->where('id', 0)->simplePaginate(10);
    //         return view('enquiry.index', compact('enquiries', 'userEmail'));
    //     }

    //     // Pass the data to the Blade view
      
    // }

    public function index()
    {
        $userEmail = session('email');
        $usertype = session('user_type');
    
        // Retrieve all records from the 'enquiry_details' table
        if ($usertype == 1) {
            $enquiries = DB::table('enquiry_details')
                            ->orderBy('created_at', 'desc') // Order by created_at in descending order
                            ->paginate(7); // Change simplePaginate to paginate
            return view('enquiry.index', compact('enquiries', 'userEmail'));
        } elseif ($usertype == 2) {
            $getuser = User::where('email', $userEmail)->first();
            $enquiries = DB::table('enquiry_details')
                            ->where('assignee', $getuser->id)
                            ->orderBy('created_at', 'desc') // Order by created_at in descending order
                            ->paginate(7);
            return view('enquiry.adminindex', compact('enquiries', 'userEmail'));
        } else {
            $enquiries = DB::table('enquiry_details')
                            ->where('id', 0)
                            ->orderBy('created_at', 'desc') // Order by created_at in descending order
                            ->paginate(7);
            return view('enquiry.index', compact('enquiries', 'userEmail'));
        }
    }
    


    public function getUserInfo()
    { 
        // Fetch users where role_id is 2
        $users = User::get(['id', 'name']);

        // Return the users as a JSON response
        return response()->json(['users' => $users]);
    }

    public function updateEnquiry(Request $request)
    {
        // Validate the incoming data
        $request->validate([
            'enquiry_id' => 'required|exists:enquiry_details,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|string',
           
        ]);
        // Update the enquiry record with the new user_id and status
        $enquiry = Enquiry::find($request->enquiry_id);
        $enquiry->assignee = $request->user_id;
        $enquiry->status = $request->status;
        $enquiry->save();

        return response()->json(['message' => 'Enquiry updated successfully!']);
    }

    public function getEnquiryDetails(Request $request)
    {
        $enquiry = Enquiry::find($request->enquiry_id);
       
        if (!$enquiry) {
            return response()->json(['message' => 'Enquiry not found'], 404);
        }
    
        return response()->json([
            'status' => $enquiry->status,
            'remarks' => $enquiry->remarks,
        ]);
    }

    public function admingetEnquiryDetails(Request $request)
    {
        $enquiry = Enquiry::find($request->enquiry_id);

        $getusername = User::where('id',$enquiry->assignee)->first() ?? null;
       
        if (!$enquiry) {
            return response()->json(['message' => 'Enquiry not found'], 404);
        }
    
        return response()->json([
            'status' => $enquiry->status,
            'username' => '$getusername->name',
        ]);
    }
    

public function userupdateEnquiry(Request $request)
{
    // Validate the incoming data
    $request->validate([
        'enquiry_id' => 'required|exists:enquiry_details,id',
        'status' => 'required|string',
        'remarks' => 'required|string',
    ]);
    // Update the enquiry record with the new user_id and status
    $enquiry = Enquiry::find($request->enquiry_id);
    $enquiry->status = $request->status;
    $enquiry->remarks = $request->remarks;
    $enquiry->save();

    return response()->json(['message' => 'Enquiry updated successfully!']);
}


}
