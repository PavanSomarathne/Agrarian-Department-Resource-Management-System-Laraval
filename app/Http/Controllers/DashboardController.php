<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use App\Models\Harvest_Product;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Arr;


class DashboardController extends Controller
{
    public function index(){
        $farmersType = User::select('land_type', User::raw('count(*) as total'))
        ->groupBy('land_type')
        ->pluck('total','land_type')->all();


        $userDivision = User::select('division', User::raw('count(*) as total'))
        ->groupBy('division')
        ->pluck('total','division')->all();

        $filteredDivisions = Arr::where($userDivision, function ($value, $key) {
            return $key != '';
        });

        $filteredFarmerType = Arr::where($farmersType, function ($value, $key) {
            return $key != '';
        });

        $farmers = User::where('type','=','Farmer')->get();
        $farmersCount = $farmers->count();

        $officers = User::where('type','=','Officer')->get();
        $officersCount = $officers->count();

        $products = Harvest_Product::all();
        $productsCount = $products->count();


        $events = Event::all();

        error_log( print_r( $filteredDivisions, true ) );
       

        return view('dashboard',['farmersType'=> $filteredFarmerType,'userDivision'=> $filteredDivisions, 'events'=>$events,'farmersCount'=>$farmersCount,'officersCount'=>$officersCount,'productsCount'=>$productsCount]);

        
    }

    
}
