@extends('layouts.master')
@include('layouts/header')   
<section class=" p100 image-background" >
<div class="container">
    <div class="d-flex justify-content-center align-items-center" style="height: 100%;">
        <div class="col-md-8">
            <div class="login-box">
                <h3>{{ __('Verify Your Email Address') }}</h3>
                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
