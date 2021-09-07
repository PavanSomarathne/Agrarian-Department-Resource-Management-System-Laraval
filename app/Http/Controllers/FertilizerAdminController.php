<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FertilizerRequestsOfficer;

class FertilizerAdminController extends Controller
{
    function index()
    {
        $data = FertilizerRequestsOfficer::all();
        error_log(print_r($data, true));
        return view('fertilzerRequestAdmin',['requestList'=>$data]);
    }

    public function approve(Request $request){
        FertilizerRequestsOfficer::where(['id'=>request('id')])->update([
            'status' => 'Approved',
        ]);
        $data = FertilizerRequestsOfficer::all();
        // redirect()->back()->with('status','Your Data Stored');
        return back()->with('fertilizerRequestAdmin',$data)->with('status','Status has been Updated!');
    }

    public function reject(Request $request){
        FertilizerRequestsOfficer::where(['id'=>request('id')])->update([
            'status' => 'Rejected',
        ]);
        $data = FertilizerRequestsOfficer::all();
        // redirect()->back()->with('status','Your Data Stored');
        return back()->with('fertilizerRequestAdmin',$data)->with('status','Status has been Updated!');
    }
}
