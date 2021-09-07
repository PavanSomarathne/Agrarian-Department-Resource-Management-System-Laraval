<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FertilizerRequestsOfficer;
use App\Models\FertilizerRequestsFarmer;

class FertilizerOfficerController extends Controller
{
    function index()
    {
        $data = FertilizerRequestsFarmer::all();
        return view('fertilizerRequestOfficer',['requestList'=>$data]);
    }

    public function store(Request $request){
        $request->validate([
            'acres' => ['required'],
            ]);
        $item = new FertilizerRequestsOfficer();
        $item->acres = request('acres');
        $item->status = 'Pending';
        $item->division = request('division');
        $item->cultivationType = implode(" , ",request('cultivation'));
        $item->fertilizerType = implode(" , ",request('category'));
        $item->save();
        
        return redirect('/fertilizerOfficer');
    }
}
