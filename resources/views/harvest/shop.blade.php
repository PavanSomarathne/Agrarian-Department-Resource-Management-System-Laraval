@extends('layouts.master')
@include('layouts/header')
@section('content')
<section class="wf100 p80">
    <div class="container d-flex justify-content-center">
   
    <section class="shop wf100 p80">
            <div class="container">
               <div class="row">
                  @if(count($data) < 1)
                  <h3 class="mb-5 mx-auto">No Items</h3>
                  @endif
               @foreach ($data as $item)
               @if($item->is_active)
                  <!--Pro Box Start-->
                  <div class="col-lg-3 col-sm-6">
                     <div class="product-box">
                        <div class="pro-thumb d-flex justify-content-center align-items-center" style="object-fit: cover;"> <a href="{{ route('harvest.product', ['id' => $item->id]) }}">View</a> <img src="{{$item->harvest_image}}" alt="{{$item->harvest_image}}"></div>
                        <div class="pro-txt">
                           <h6><a href="{{ route('harvest.product', ['id' => $item->id]) }}">{{$item->harvest_name}}</a></h6>
                           <p class="pro-price">Rs. {{$item->harvest_price}}</p>
                        </div>
                     </div>
                  </div>
                @endif
                @endforeach
  
                  <!-- <div class="col-lg-3 col-sm-6">
                     <div class="product-box">
                        <div class="pro-thumb"> <a href="#">Add To Cart</a> <img src="images/shop/pro2.jpg" alt=""></div>
                        <div class="pro-txt">
                           <h6><a href="#">Woo corlor shirt</a></h6>
                           <p class="pro-price"><del>$25.00</del> $19.00</p>
                        </div>
                     </div>
                  </div> -->
               
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="gt-pagination">
                        <nav>
                           <ul class="pagination">
                              <li class="page-item"> <a class="page-link" href="#" aria-label="Previous" style="padding-top: 10px;"> <i class="fas fa-angle-left"></i> </a> </li>
                              <li class="page-item active"><a class="page-link" href="#">1</a></li>
                              <li class="page-item "><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#">3</a></li>
                              <li class="page-item"> <a class="page-link" href="#" aria-label="Next" style="padding-top: 10px;"> <i class="fas fa-angle-right"></i> </a> </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </section>

    </div>
</section>
@endsection
<!--Causes End-->