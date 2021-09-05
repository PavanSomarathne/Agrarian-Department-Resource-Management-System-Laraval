<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Log;



class DashboardController extends Controller
{
    public function index(){
        $farmersType = User::select('land_type', User::raw('count(*) as total'))
        ->groupBy('land_type')
        ->pluck('total','land_type')->all();


        $userDivision = User::select('division', User::raw('count(*) as total'))
        ->groupBy('division')
        ->pluck('total','division')->all();

        $farmers = User::where('type','=','Farmer')->get();
        $farmersCount = $farmers->count();

        $officers = User::where('type','=','Officer')->get();
        $officersCount = $officers->count();

        $events = Event::all();

        error_log( print_r( $userDivision, true ) );

        return view('dashboard',['farmersType'=> $farmersType,'userDivision'=> $userDivision, 'events'=>$events,'farmersCount'=>$farmersCount,'officersCount'=>$officersCount,]);

        
    }

    
}
