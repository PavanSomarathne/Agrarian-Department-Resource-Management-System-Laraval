<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OfficerController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $data = User::where('type','=','Officer')->get();
        return view('viewOfficers')->with('data',$data);
    }
    public function update(Request $request)
    {
        User::where(['id'=>$request['oid']])->update([
            'name' => $request['name'],
            'nic' => $request['nic'],
            'email' => $request['email'],
            'dob' => $request['dob'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'division' => $request['division'],
        ]);
        $data = User::where('type','=','Officer')->get();
        // redirect()->back()->with('status','Your Data Stored');
        return back()->with('data',$data)->with('status','Officer has been Updated!');
    }
    public function delete(Request $request)
    {
        User::where(['id'=>$request['id']])->update([
            'is_active' => 0,
        ]);
        $data = User::where('type','=','Officer')->get();
        return view('viewOfficers')->with('data',$data)->with('status','Officer deleted successfully!');
    }
}
