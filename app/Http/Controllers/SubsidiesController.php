<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subsidie;

class SubsidiesController extends Controller
{
    public function index(){
        $subsidies = Subsidie::all();

        return view('subsidies',['subsidies'=> $subsidies]);
    }

    public function show(){
        
        return view('subsidies');
    }
}
