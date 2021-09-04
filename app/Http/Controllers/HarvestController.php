<?php

namespace App\Http\Controllers;

use App\Models\Harvest_Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class HarvestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('harvest.add_harvest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'harvest_image' => ['required', 'mimes:jpg,jpeg,png', 'max:2048'],
            'harvest_name' => ['required', 'string', 'max:255'],
            'agreement' => ['required'],
            'harvest_phone' => [ 'required', 'string', 'max:10', 'min:10'],
            'harvest_selling_type' => [ 'not_in:null,'],
            'harvest_quantity' => ['required', 'numeric', 'gt:0'],
            'harvest_price' => ['required', 'numeric', 'gt:0'],
            ]);

            $fileModel = new Harvest_Product;
    
            if($request->file()) {
                $fileName = time().'_'.$request->harvest_image->getClientOriginalName();
                Log::info(print_r($fileName, true));
                $filePath = $request->file('harvest_image')->storeAs('uploads', $fileName, 'public');
                $fileModel->harvest_name = $request['harvest_name'];
                $fileModel->harvest_quantity = $request['harvest_quantity'];
                $fileModel->harvest_phone = $request['harvest_phone'];
                $fileModel->harvest_price =$request['harvest_price'] ;
                $fileModel->harvest_selling_type =$request['harvest_selling_type'] ;
                $fileModel->harvest_description =$request['harvest_description'] ;
                $fileModel->harvest_image = '/storage/' . $filePath;
                $fileModel->save();
    
                return back()
                ->with('success','Harvest has been inserted!')
                ->with('harvest_image', $fileName);
            }
    }

    public function shop()
    {
        $data = Harvest_Product::all();
        return view('harvest.shop')->with('data',$data);
    }
    public function product($id)
    {
        // $data = Harvest_Product::all();
        $data = Harvest_Product::where('id','=',$id)->get();
        return view('harvest.product')->with('data',$data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
