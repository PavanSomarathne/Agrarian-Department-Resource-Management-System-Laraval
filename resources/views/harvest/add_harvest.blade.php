@extends('layouts.master')
@include('layouts/header')
@section('content')
<section class="wf100 p80">
    <div class="container d-flex justify-content-center">
  
            <div class="col-lg-8">
                <div class="myaccount-form">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <h4 class="text-center "><strong class="text-white">{{ $message }}</strong></h4>
                    </div>
                @endif
                    <h3>Insert Products</h3>
                    <form id="register-form" method="POST" action="{{ route('harvest.add') }}" enctype="multipart/form-data">
                        @csrf
                        <ul class="row">
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="text" id="harvest_name" class="form-control @error('harvest_name') is-invalid @enderror" placeholder="Product Name" name="harvest_name" value="{{ old('harvest_name') }}" required>
                                    @error('harvest_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </li>

                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="number" class="form-control @error('harvest_quantity') is-invalid @enderror" placeholder="Product Quantity" name="harvest_quantity" value="{{ old('harvest_quantity') }}">
                                    @error('harvest_quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>

                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="number" class="form-control @error('harvest_price') is-invalid @enderror" placeholder="Product Price per 1Kg" name="harvest_price" value="{{ old('harvest_price') }}">
                                    @error('harvest_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>

                            <li class="col-md-6 payment-method">
                                
                                <select class="form-control  mt-0 @error('harvest_selling_type') is-invalid @enderror" name="harvest_selling_type" value="{{ old('harvest_selling_type') }}">
                                    <option value="{{ old('harvest_selling_type') ? old('harvest_selling_type') : 'null' }}">{{ old('harvest_selling_type')&&old('harvest_selling_type')!='null' ? old('harvest_selling_type') : 'Selling Type' }}</option>
                                    <option value="Wholesale">Wholesale</option>
                                    <option value="Retail">Retail</option>
                                 </select>
                                 @error('harvest_selling_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </li>
                            
                            <li class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control @error('harvest_phone') is-invalid @enderror" placeholder="Contact #" name="harvest_phone" value="{{ old('harvest_phone') }}">
                                    @error('harvest_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </li>
                        

                            <li class="col-md-6">
                                <div class="input-group form-control pb-5 ">
                                    <input type="file" id="password" class=" @error('harvest_image') is-invalid @enderror " placeholder="Password" name="harvest_image" value="{{ old('harvest_image') }}">
                                    @error('harvest_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </li>
                            <li class="col-md-12">
                                <div class="input-group  pb-5 ">
                                    <textarea type="textarea" id="password" class="form-control col-md-12" placeholder="Description about the product" name="harvest_description" value="{{ old('harvest_description') }}"></textarea>
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
                        <input type="hidden" name="type" value="Farmer">
                    </form>
                </div>
            </div>

    </div>
</section>
@endSection
