@extends('layouts.master')
@include('layouts/header')
<!--Inner Header Start-->

<section class="wf100 p100 inner-header">
    <div class="container">
        <h1>My Account</h1>
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
                    <form id="register-form" method="POST" action="{{ route('register') }}">
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
                                    <input id="nic" type="text" class="form-control @error('nic') is-invalid @enderror" placeholder="Your Nic" name="nic">
                                    @error('nic')
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
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Contact #" name="phone">
                                </div>
                            </li>
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </li>
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="password" class="form-control" placeholder="Re-enter Password" name="password_confirmation">
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
                                <button type="submit" class="register" onclick="event.preventDefault();
                                                     document.getElementById('register-form').submit();">Register Your Account</button>
                            </li>
                        </ul>
                        <!-- Hidden inputs -->
                        <input type="hidden" name="type" value="User">
                    </form>
                </div>
            </div>

    </div>
</section>

<!--Causes End-->