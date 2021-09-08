@extends('layouts.master')
@include('layouts/header')
@section('content')
<div class="wrapper d-flex flex-column align-items-between " style="height: 80vh;">
   <div class="col-12 p-0 m-0 d-flex justify-content-center align-items-center " >
      <div class="row col-8 p-0 m-0">
         <div class="col-lg-4">
            <div class="card">
               <div class="card-body ">
                  <div class="d-flex flex-column align-items-center text-center">
                     <img id="pro_image" src="{{ Auth::user()->profile_image}}" alt="Admin" class=" p-1 bg-light" style="object-fit: cover;border-radius: 50%;overflow: hidden;width: 200px;height:200px">
                     <button id="edit_img_btn" class="btn btn-outline-success m-1"><i class="fas fa-pencil-alt"></i></button>
                     <input type="file" id="my_file" style="display: none;" onchange="readURL(this);"/>
                     <div class="mt-3">
                        <h4>{{ Auth::user()->name}}</h4>
                        <p class="text-secondary mb-1">{{ Auth::user()->type}}</p>
                        <p class="text-muted font-size-sm">{{ Auth::user()->nic}}</p>
                     </div>
                  </div>


               </div>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="card pl-3">
               <div class="card-body ">
                  <div class="row mb-3">
                     <div class="col-sm-3 m-0 p-0">
                        <p class="mb-0"><strong>Name</strong></p>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="John Doe">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-3 m-0 p-0">
                        <p class="mb-0"><strong>Email</strong></p>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="john@example.com">
                     </div>
                  </div>
                  
                  <div class="row mb-3">
                     <div class="col-sm-3 m-0 p-0">
                        <p class="mb-0"><strong>Phone</strong></p>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="(320) 380-4539">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-3 m-0 p-0">
                        <p class="mb-0"><strong>Address</strong></p>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="Bay Area, San Francisco, CA">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-3 m-0 p-0">
                        <p class="mb-0"><strong>Phone</strong></p>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="(239) 816-9029">
                     </div>
                  </div>
                  <div class="row mb-3">
                     <div class="col-sm-3 m-0 p-0">
                        <p class="mb-0"><strong>Confirm Password</strong></p>
                     </div>
                     <div class="col-sm-9 text-secondary">
                        <input type="text" class="form-control" value="(239) 816-9029">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-sm-3"></div>
                     <div class="col-sm-8 text-secondary">
                        <input type="button" class="btn btn-primary px-4" value="Update">
                     </div>
                     
                  </div>
               </div>
            </div>

         </div>
      </div>

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
      $("body").on("click", "#edit_img_btn", function(event) {
      $("input[id='my_file']").click(); 
   });
   });

   function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
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