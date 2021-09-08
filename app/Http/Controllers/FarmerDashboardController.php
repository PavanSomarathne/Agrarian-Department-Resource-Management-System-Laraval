<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Subsidie;

class FarmerDashboardController extends Controller
{
    public function index(){
        $events = Event::all();
        $subsidies = Subsidie::all();
        return view('dashboardFarmer',['events'=>$events,'subsidies'=>$subsidies,]);
    }
}
