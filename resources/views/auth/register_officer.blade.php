@extends('layouts.master')
@include('layouts/header')
<!--Inner Header Start-->

<section class="wf100 p100 inner-header">
    <div class="container">
        <h1>Officer Registration</h1>
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
                @isset($register)
            
                        <h4 style="color: green;">User added successfully!</h4>
                     
                @endisset
                @isset($error)
            
                        <h4 style="color: red;">User registration failed!</h4>
                     
                @endisset
                    <h3>Register Your Account</h3>
                    <form id="register-form" method="POST" action="{{ route('register_officer') }}">
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
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input id="nic" type="text" class="form-control @error('grama_division') is-invalid @enderror" placeholder="Grama Niladhari Division" value="{{ old('grama_division') }}" name="grama_division">
                                    @error('grama_division')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>

                            <!-- <li class="col-md-6">
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
                            </li> -->
                            <li class="col-md-12">
                                <div class="input-group form-check">
                                    <input type="checkbox" class="form-check-input @error('agreement') is-invalid @enderror" id="exampleCheck1" name="agreement">
                                    <label class="form-check-label" for="exampleCheck1">Send Email with user credentials</label>
                                    @error('agreement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>
                            <li class="col-md-12">
                                <button type="submit" class="register" onclick="event.preventDefault();
                                                     document.getElementById('register-form').submit();">Add An Officer</button>
                            </li>
                        </ul>
                        <!-- Hidden inputs -->
                        <input type="hidden" name="type" value="Officer">
                    </form>
                </div>
            </div>

    </div>
</section>

<!--Causes End-->