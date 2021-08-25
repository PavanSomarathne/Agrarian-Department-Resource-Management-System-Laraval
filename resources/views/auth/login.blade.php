
@extends('layouts.master')
@include('layouts/header')
<!--Inner Header Start-->

<section class=" p100 image-background" >
    
            <div class="container d-flex justify-content-center align-items-center" style="height: 100%;">
                  <div class="col-lg-4">
                     <div class="login-box">
                        <h3>Login Account</h3>
                        <form id="login-form" method="POST" action="{{ route('login') }}">
                        @csrf   
                        <div class="input-group">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username/Email" name="email" value="{{ old('email') }}" required>
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                           <div class="input-group">
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                              @enderror
                           </div>
                              
                             
                           <div class="input-group form-check">
                              <input type="checkbox" class="form-check-input" id="exampleCheck2" {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="exampleCheck2">Remember Me</label>
                              @if (Route::has('password.request'))
                                 <a href="{{ route('password.request') }}" class="fp">Forgot Password</a> 
                              @endif
                           </div>
                           <div class="input-group ">
                              <button class="login-btn btn" type="submit" onclick="event.preventDefault();
                                                     document.getElementById('login-form').submit();">Login Account</button>
                           </div>
                        </form>
                     </div>
                  </div>
              
            </div>
           
         </section>
         <!--Inner Header End--> 
       
     