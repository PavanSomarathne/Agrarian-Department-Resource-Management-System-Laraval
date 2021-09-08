<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class FarmerDashboardController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('dashboardFarmer',['events'=>$events,]);
    }
}
