@extends('layouts.master')
@include('layouts/header')
<!--Inner Header Start-->

<section class="p100 image-background" >

   <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
      <div class="col-lg-4">
         <div class="login-box">
         @if (session('status'))
                        <h5 class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </h5>
                    @endif
            <h3>{{ __('Reset Password') }}</h3>
            
            <form method="POST" action="{{ route('password.email') }}">
               @csrf
              
               <label for="email" class="">{{ __('E-Mail Address') }}</label>
               <div class="input-group">
                 
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder=" Enter Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               
               <div class="input-group ">
                  <button class="login-btn btn" type="submit">{{ __('Send Password Reset Link') }}</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!--Inner Header End-->