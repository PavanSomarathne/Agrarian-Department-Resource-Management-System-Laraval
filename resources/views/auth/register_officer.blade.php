@extends('layouts.admin')
@section('content')
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Dashboard</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0" style="background-color: #ffffff;">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Insert Officers</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="col">
        <div class="card border-top border-0 border-4 border-success">
            <div class="card-body p-5">

                @isset($register)

                <h4 style="color: green;">User added successfully!</h4>

                @endisset
                @isset($error)

                <h4 style="color: red;">User registration failed!</h4>

                @endisset
                <div class="card-title d-flex align-items-center">
                    <div><i class="healthicons:officer-outline me-1 font-22"></i>
                    </div>
                    <h5 class="mb-0 ">Add New Officer</h5>
                </div>
                <hr>
                <form id="register-form" class="row g-3" method="POST" action="{{ route('register_officer') }}">
                    @csrf
                    <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Name</label>
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Your Name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror


                    </div>

                    <div class="col-md-6">
   
                        <label for="inputLastName" class="form-label">Email</label>
                            <input type="text" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                       

                    </div>


                    <div class="col-md-6 payment-method">
                    <label for="inputLastName" class="form-label">Division</label>
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
                    </div>
                    <div class="col-md-6">
                    <label for="inputLastName" class="form-label">Grama Niladhari Division</label>
                            <input id="nic" type="text" class="form-control @error('grama_division') is-invalid @enderror" placeholder="Grama Niladhari Division" value="{{ old('grama_division') }}" name="grama_division">
                            @error('grama_division')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                       
                    </div>

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
                    <div class="col-md-12">
                        <div class="input-group form-check">
                            <input type="checkbox" class="form-check-input @error('agreement') is-invalid @enderror" id="exampleCheck1" name="agreement">&ensp;
                            <label class="form-check-label" for="exampleCheck1">Send Email with user credentials</label>
                            @error('agreement')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="register btn btn-success" onclick="event.preventDefault();
                                                     document.getElementById('register-form').submit();">Add An Officer</button>
                    </div>

                    <!-- Hidden inputs -->
                    <input type="hidden" name="type" value="Officer">
                </form>

            </div>
        </div>
    </div>

</div>
@stop
<!--Causes End-->