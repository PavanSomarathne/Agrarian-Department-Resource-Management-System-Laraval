@extends('layouts.admin')
@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item " aria-current="page">Add Harvest</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="col">
    <div class="card border-top border-0 border-4 border-success">
  
            <div class="card-body p-5">
                <div class="myaccount-form">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <h4 class="text-center "><strong class="text-white">{{ $message }}</strong></h4>
                    </div>
                @endif
                <div class="card-title d-flex align-items-center">
                    <div><i class=" me-1 font-22"></i>
                    </div>
                    <h5 class="mb-0 ">Insert Harvest</h5>
                </div>
                <hr>
                    <form id="register-form" class="row g-3"  method="POST" action="{{ route('harvest.add') }}" enctype="multipart/form-data">
                        @csrf
                       
                            <div class="col-md-6">
                            <label class="form-label">Product Name</label>
                                    <input type="text" id="harvest_name" class="form-control @error('harvest_name') is-invalid @enderror" placeholder="Product Name" name="harvest_name" value="{{ old('harvest_name') }}" required>
                                    @error('harvest_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                             

                            </div>

                            <div class="col-md-6">
                            <label class="form-label">Product Quantity</label>
                                    <input type="number" class="form-control @error('harvest_quantity') is-invalid @enderror" placeholder="Product Quantity" name="harvest_quantity" value="{{ old('harvest_quantity') }}">
                                    @error('harvest_quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                
                            </div>

                            <div class="col-md-6">
                            <label class="form-label">Product Price</label>
                                    <input type="number" class="form-control @error('harvest_price') is-invalid @enderror" placeholder="Product Price per 1Kg" name="harvest_price" value="{{ old('harvest_price') }}">
                                    @error('harvest_price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                
                            </div>

                            <div class="col-md-6 payment-method">
                            <label class="form-label">Selling Type</label>
                                <select class="form-select mt-0 @error('harvest_selling_type') is-invalid @enderror" name="harvest_selling_type" value="{{ old('harvest_selling_type') }}">
                                    <option value="{{ old('harvest_selling_type') ? old('harvest_selling_type') : 'null' }}">{{ old('harvest_selling_type')&&old('harvest_selling_type')!='null' ? old('harvest_selling_type') : 'Selling Type' }}</option>
                                    <option value="Wholesale">Wholesale</option>
                                    <option value="Retail">Retail</option>
                                 </select>
                                 @error('harvest_selling_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            
                            <div class="col-md-6">
                              
                                <label class="form-label">Farmer Phone</label>
                                    <input type="text" class="form-control @error('harvest_phone') is-invalid @enderror" placeholder="Contact #" name="harvest_phone" value="{{ old('harvest_phone') }}">
                                    @error('harvest_phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                
                            </div>
                        

                            <div class="col-md-6">
                               
                                    <label class="form-label">Upload Product Image Description</label>
                                    <input type="file" id="password" class=" @error('harvest_image') is-invalid @enderror " placeholder="Password" name="harvest_image" value="{{ old('harvest_image') }}">
                                    @error('harvest_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                             

                            </div>
                            <div class="col-md-12">
                               
                                <label class="form-label">Product Description</label>
                                <textarea type="textarea" id="password" class="form-control col-md-12" placeholder="Description about the product" name="harvest_description" value="{{ old('harvest_description') }}"></textarea>
                            
                            </div>
                         
                            <div class="col-md-12">
                                <div class="input-group form-check">
                                    <input type="checkbox" class="form-check-input @error('agreement') is-invalid @enderror" id="exampleCheck1" name="agreement">&ensp;
                                    <label class="form-check-label" for="exampleCheck1">I agree to the Terms of Services & Privacy Policy</label>
                                    @error('agreement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="register btn btn-success" onclick="event.preventDefault();
                                                     document.getElementById('register-form').submit();">Register Your Account</button>
                            </div>
                 
                        <!-- Hidden inputs -->
                        <input type="hidden" name="type" value="Farmer">
                    </form>
                </div>
            </div>

    </div>
    </div>
</div>
@endSection
