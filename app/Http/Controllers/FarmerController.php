<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
        $data = User::where('type','=','Farmer')->get();
        return view('view_farmers')->with('data',$data);
    }
}
