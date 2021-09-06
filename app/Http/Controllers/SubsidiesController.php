<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subsidie;

class SubsidiesController extends Controller
{
    public function index(){
        $subsidies = Subsidie::all();

        return view('subsidies',['subsidies'=>$subsidies]);
    }

    public function store(Request $request){
        $request->validate([
            'date' => ['required', 'date', 'max:255'],
            'description' => ['required'],
            ]);
        $subsidie = new Subsidie();
        $subsidie->date = request('date');
        $subsidie->description = request('description');
        $subsidie->save();
        
        return redirect('/subsidies');
    }

    public function update()
    {
        error_log(request('id'));
        Subsidie::where(['id'=>request('id')])->update([
            'date' => request('date'),
            'description' => request('description'),
        ]);
        $subsidies = Subsidie::all();
        // redirect()->back()->with('status','Your Data Stored');
        return back()->with('subsidies',$subsidies)->with('status','Subsidie has been Updated!');
    }

    public function delete()
    {
        Subsidie::where('id','=',request('id'))->delete();
        $subsidies = Subsidie::all();
        return view('subsidies')->with('subsidies',$subsidies)->with('status','Subsidie deleted successfully!');
    }
}
