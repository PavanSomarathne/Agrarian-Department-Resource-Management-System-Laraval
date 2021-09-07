<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $uType = Auth::user()->type;
        $uId = Auth::user()->id;
        $data = User::where('id', '=', $uId)->get();
        if ($uType == 'User') {
            return view('profile.profile_user')->with('data', $data);
        } else {
            return view('profile.profile_admin')->with('data', $data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'profile_image' => ['mimes:jpg,jpeg,png', 'max:2048'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',],
            'password' => ['confirmed'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:10', 'min:10'],
        ]);
        $userModel = new User;
      
        $uId = Auth::user()->id;
        
        if ($request->file()) {
            $fileName = time() . '_' . $request->profile_image->getClientOriginalName();
            $filePath = $request->file('profile_image')->storeAs('profile_images', $fileName, 'public');
            
            $userModel->id = $uId;
            $userModel->name = $request['name'];
            $userModel->email = $request['email'];
            if ($request['password'] != null) {
                $userModel->password = Hash::make($request['password']);
            }
            $userModel->address = $request['address'];
            $userModel->phone = $request['phone'];
            $userModel->profile_image = '/storage/' . $filePath;
            
            $userModel->update();
            if ($request['password'] != null) {
                User::where(['id'=>$uId])->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                 'password' => $request['password'],
                    'address' => $request['address'],
                    'phone' => $request['phone'],
                    'profile_image' => '/storage/' . $filePath,
                ]);
            }else{
                User::where(['id'=>$uId])->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'address' => $request['address'],
                    'phone' => $request['phone'],
                    'profile_image' =>'/storage/' . $filePath,
                ]);
            }
        } else {
           
            if ($request['password'] != null) {
                User::where(['id'=>$uId])->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                 'password' => $request['password'],
                    'address' => $request['address'],
                    'phone' => $request['phone'],
                ]);
            }else{
                User::where(['id'=>$uId])->update([
                    'name' => $request['name'],
                    'email' => $request['email'],
                    'address' => $request['address'],
                    'phone' => $request['phone'],
                ]);
            }
           
        }
     
        $data = User::where('id', '=', $uId)->get();
        return back()->with('data', $data)->with('status', 'User has been Updated!');
    }
    public function delete(Request $request)
    {
        // Harvest_Product::where(['id' => $request['id']])->update([
        //     'is_active' => 0,
        // ]);
        // $data = Harvest_Product::all();
        // return back()->with('data', $data)->with('status', 'Product deleted successfully!');
    }
}
