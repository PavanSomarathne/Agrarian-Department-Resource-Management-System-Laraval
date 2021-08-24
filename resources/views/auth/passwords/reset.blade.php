@extends('layouts.master')
@include('layouts/header')
<!--Inner Header Start-->

<section class="p100 image-background" >

   <div class="container d-flex d-flex justify-content-center align-items-center" style="height: 100%;">
      <div class="col-lg-4">
         <div class="login-box">
            <h3>{{ __('Reset Password') }}</h3>
            <form method="POST" action="{{ route('password.update') }}">
               @csrf
               <input type="hidden" name="token" value="{{ $token }}">
               <label for="email" class="">{{ __('E-Mail Address') }}</label>
               <div class="input-group">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username/Email" name="email" value="{{ $email ?? old('email') }}" required>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <label for="password" class="">{{ __('Password') }}</label>
               <div class="input-group">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                  </span>
                  @enderror
               </div>
               <label for="password" class="">{{ __('Confirm Password') }}</label>
               <div class="input-group">
                  <input id="password-confirm" type="password" class="form-control" placeholder="Password" name="password_confirmation" required autocomplete="new-password">
               </div>
               <div class="input-group ">
                  <button class="login-btn btn" type="submit">Reset Password</button>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!--Inner Header End-->