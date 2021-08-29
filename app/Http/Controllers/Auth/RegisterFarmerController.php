<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersFarmers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class RegisterFarmerController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersFarmers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        Log::info(print_r($data, true));

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'nic' => ['required', 'string', 'max:13'],
            'agreement' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'dob' => ['required', 'date','not_in:,'],
            'division' => [ 'not_in:null,'],
            'address' => ['required', 'string', 'max:255'],
            'phone' => [ 'required', 'string', 'max:10', 'min:10'],
            'land_type' => ['not_in:null,'],
            'farmer_type' => ['not_in:null,'],
            'acres' => ['required', 'numeric', 'gt:0'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'nic' => $data['nic'],
            'email' => $data['email'],
            'dob' => $data['dob'],
            'address' => $data['address'],
            'phone' => $data['phone'],
            'division' => $data['division'],
            'land_type' => $data['land_type'],
            'farmer_type' => $data['farmer_type'],
            'acres' => $data['acres'],
            'type' => $data['type'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
