<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FertilizerRequestsFarmer;

class FertilizerFarmerController extends Controller
{
    function index()
    {
        return view('fertilizerRequestFarmer');
    }

    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'acres' => ['required'],
            ]);

        $item = new FertilizerRequestsFarmer();
        $item->name = request('name');
        $item->division = request('division');
        $item->season = request('season');
        $item->type = request('type');
        $item->acres = request('acres');
        $item->save();
        
        return redirect('/fertilizerFarmer');
    }
}
