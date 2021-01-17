<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/* use use Auth; */

class AuthController extends Controller
{
    public function logout(Request $request) 
    {
        Auth::logout();
        return redirect('/login');
    }

    
    public function add_new_customer_details(Request $request)
    {
        $request->validate(
            [
            'fname'     =>  'required|string|max:255',
            'lname'     =>  'string|max:255',
            'dob'       =>  'required|date',
            'Phoneno'   =>  'required|integer|min:1000000000|max:11000000000',
            'flat'      =>  'string|max:255',
            'street'    =>  'string|max:255',
            'pincode'   =>  'integer',
            'city'      =>  'string|max:255',
            ]
        ); 

        $User_id = Auth::user()->id;

        $new_customaer = new Customer;

        $new_customaer->user_id     =   $User_id;
        $new_customaer->first_name  =   $request->fname;
        $new_customaer->middle_name  =   $request->mname;
        $new_customaer->last_name   =   $request->lname;
        $new_customaer->gender   =   $request->gender;
        $new_customaer->dob         =   $request->dob;
        $new_customaer->phoneno     =   $request->Phoneno;
        $new_customaer->save();

        return redirect('/');
    }
}
