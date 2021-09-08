@extends('layouts.master')
@include('layouts/header')
@section('content')
<div class="wrapper d-flex flex-column align-items-between " style="height: 80vh;width: 100%;">
   <div class="col-12 p-0 m-0 d-flex justify-content-center align-items-center " style="width: 100%;">
      @if(is_array($data) || is_object($data))
      @foreach ($data as $item)
      <form id="register-form" class="" method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
         @csrf
         {{method_field('PUT')}}
         <div class="row col-12 p-0 m-0">
            <div class="col-lg-4">
               <div class="card">
                  <div class="card-body ">
                     <div class="d-flex flex-column align-items-center text-center">
                        @if(!empty($item->image))
                        <img id="pro_image" src="/storage/profile_images/profile.png" alt="Admin" class=" p-1 bg-light" style="object-fit: cover;border-radius: 50%;overflow: hidden;width: 200px;height:200px">
                        @else
                        <img id="pro_image" src="{{$item->profile_image}}" alt="Admin" class=" p-1 bg-light" style="object-fit: cover;border-radius: 50%;overflow: hidden;width: 200px;height:200px">

                        @endif
                        <label id="edit_img_btn" class="btn btn-outline-success m-1 " onclick="document.getElementById('my_file').click()"><i class="fas fa-pencil-alt"></i></label>
                        <input type="file" id="my_file" style="display: none;" class="@error('profile_image') is-invalid @enderror btn btn-outline-success m-1 " name="profile_image" onchange="readURL(this);" />
                        @error('profile_image')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="mt-3">
                           <h4>{{$item->name}}</h4>
                           <p class="text-secondary mb-1">{{$item->type}}</p>
                           <p class="text-muted font-size-sm">{{$item->nic}}</p>


                        </div>
                     </div>


                  </div>
               </div>
            </div>
            <div class="col-lg-8">
               <div class="card ">
                  <div class="card-body ">
                     <div class="row mb-3">
                        <div class="col-sm-3 m-0 p-0">
                           <p class="mb-0"><strong>Name</strong></p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$item->name}}">
                           @error('name')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-sm-3 m-0 p-0">
                           <p class="mb-0"><strong>Email</strong></p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="{{$item->email}}">
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>

                     <div class="row mb-3">
                        <div class="col-sm-3 m-0 p-0">
                           <p class="mb-0"><strong>Phone</strong></p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{$item->phone}}">
                           @error('phone')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-sm-3 m-0 p-0">
                           <p class="mb-0"><strong>Address</strong></p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{$item->address}}">
                           @error('address')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>
                     </div>
                     <div class="row mb-3">
                        <div class="col-sm-3 m-0 p-0">
                           <p class="mb-0"><strong>Password</strong></p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="">
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                        </div>

                     </div>
                     <div class="row mb-3">
                        <div class="col-sm-3 m-0 p-0">
                           <p class="mb-0"><strong>Confirm Password</strong></p>
                        </div>
                        <div class="col-sm-9 text-secondary">
                           <input type="password" name="password_confirmation" class="form-control" value="">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-8 text-secondary">
                           <input type="submit" class="btn btn-primary px-4" value="Update">
                        </div>

                     </div>
                  </div>
               </div>

            </div>
         </div>
      </form>
      @endforeach
      @endif
      <!--Footer End-->
   </div>
   <footer class="footer p-0 pt-3">
      <div class="w-100 d-flex flex-column align-items-center">
         <img width="150" class="mb-2" src="images/agro.png" alt="">
         <div class="text-white mb-3">ADRMS Devs</div>
      </div>
   </footer>
</div>

<script>
   $(document).ready(function() {
      // $("body").on("click", "#edit_img_btn", function(event) {
      //    $("input[id='my_file']").click();
      // });
   });

   function readURL(input) {
      if (input.files && input.files[0]) {
         var reader = new FileReader();

         reader.onload = function(e) {
            $('#pro_image')
               .attr('src', e.target.result)
               .width(200)
               .height(200);
         };

         reader.readAsDataURL(input.files[0]);
      }
   }
</script>
@stop