@extends('layouts.master')
@include('layouts/header')
<!--Inner Header Start-->

<section class="wf100 p100 inner-header">
    <div class="container">
        <h1>Farmer Registration</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#"> My Account </a></li>
        </ul>
    </div>
</section>
<!--Inner Header End-->
<!--Causes Start-->

<section class="wf100 p80">
    <div class="container d-flex justify-content-center">
  
            <div class="col-lg-8">
                <div class="myaccount-form">
                    <h3>Register Your Account</h3>
                    <form id="register-form" method="POST" action="{{ route('register_farmer') }}">
                        @csrf
                        <ul class="row">
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </li>
                            
                            <li class="col-md-6">
                                <div class="input-group">
                                
                                    <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </li>
                            <li class="col-md-6">
                            <label for="email" class="">Enter Your NIC Number With V letter</label>
                                <div class="input-group">
                                    <input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" placeholder="Your Nic" value="{{ old('nic') }}" name="nic">
                                    @error('nic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>
                            <li class="col-md-6">
                            <label for="dob" class="">Date of Birth</label>
                                <div class="input-group ">
                                
                                    <input type="date" class="form-control @error('dob') is-invalid @enderror" placeholder="Date of birth" name="dob" value="{{ old('dob') }}">
                                    @error('dob')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                
                            </li>
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('address') is-invalid @enderror" placeholder="Address" name="address" value="{{ old('address') }}">
                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Contact #" name="phone" value="{{ old('phone') }}">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>
                            <li class="col-md-6 payment-method">
                                
                                <select class="form-control  mt-0 @error('division') is-invalid @enderror" name="division" value="{{ old('division') }}">
                                    <option value="{{ old('division') ? old('division') : 'null' }}">{{ old('division')&&old('division')!='null' ? old('division') : 'Division' }}</option>
                                    <option value="Gokarella North">Gokarella North</option>
                                    <option value="Gokarella West">Gokarella West</option>
                                    <option value="Gokarella South">Gokarella South</option>
                                    <option value="Gokarella East">Gokarella East</option>
                                 </select>
                                 @error('division')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </li>
                            <li class="col-md-6 payment-method">
                               
                                <select class="form-control  mt-0 @error('land_type') is-invalid @enderror" name="land_type" value="{{ old('land_type') }}">
                                    <option value="{{ old('land_type') ? old('land_type') : 'null' }}">{{ old('land_type')&&old('land_type')!='null' ? old('land_type') : 'Land Type' }}</option>
                                    <option value="Mud Land">Mud Land</option>
                                    <option value="Surface Land">Surface Land</option>
                                 </select>
                                 @error('land_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </li>
                            <li class="col-md-6 payment-method ">
                                <select class="form-control  mt-0 @error('farmer_type') is-invalid @enderror" name="farmer_type" value="{{ old('farmer_type') }}">
                                    <option value="{{ old('farmer_type') ? old('farmer_type') : 'null' }}">{{ old('farmer_type')&&old('farmer_type')!='null' ? old('farmer_type') : 'Farmer Type' }}</option>
                                    <option value="Freeholder Landowner">Freeholder Landowner</option>
                                    <option value="Tenant Farmer">Tenant Farmer</option>
                                 </select>
                                 @error('farmer_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </li>
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="number" class="form-control @error('acres') is-invalid @enderror" placeholder="Acres" name="acres" value="{{ old('acres') }}">
                                    @error('acres')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>

                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" >
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </li>
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Re-enter Password" name="password_confirmation">
                                </div>
                            </li>
                            <li class="col-md-12">
                                <div class="input-group form-check">
                                    <input type="checkbox" class="form-check-input @error('agreement') is-invalid @enderror" id="exampleCheck1" name="agreement">
                                    <label class="form-check-label" for="exampleCheck1">I agree to the Terms of <a href="#">Services & Privacy Plicy</a></label>
                                    @error('agreement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>
                            <li class="col-md-12">
                                <button type="submit" class="register mx-auto" onclick="event.preventDefault();
                                                     document.getElementById('register-form').submit();">Register Your Account</button>
                            </li>
                        </ul>
                        <!-- Hidden inputs -->
                        <input type="hidden" name="type" value="Farmer">
                    </form>
                </div>
            </div>

    </div>
</section>

<!--Causes End-->