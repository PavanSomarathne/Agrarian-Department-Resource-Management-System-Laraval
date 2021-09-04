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
        User::where(['id'=>$request['fid']])->update([
            'name' => $request['name'],
            'nic' => $request['nic'],
            'email' => $request['email'],
            'dob' => $request['dob'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'division' => $request['division'],
            'land_type' => $request['land_type'],
            'farmer_type' => $request['farmer_type'],
            'acres' => $request['acres'],
        ]);
        $data = User::where('type','=','Farmer')->get();
        // redirect()->back()->with('status','Your Data Stored');
        return back()->with('data',$data)->with('status','Farmer has been Updated!');
    }
    public function delete(Request $request)
    {
        $data = User::where('id','=',$request['id'])->delete();
        return view('viewFarmers')->with('data',$data)->with('status','Farmer deleted successfully!');
    }
}
