@extends('layouts.master')
@include('layouts/header')
@section('content')

<div class="container d-flex justify-content-center">

   @foreach ($data as $item)
   <div class="product-details">
      <div class="container">
         <br />
         <br />
         <br />
         <div class="row">
            <div class="col-md-6 d-flex justify-content-center align-items-center">
               <div class="pro-large" style="object-fit: cover;"><img src="{{$item->harvest_image}}" alt=""></div>
            </div>
            <div class="col-md-6">
               <div class="product-text">
                  <br />
                  <h2>{{$item->harvest_name}}</h2><br />
                  <!-- <div class="pro-rating"> <a href="#"><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half-alt"></i></a> </div> -->
                  <div class="pro-pricing">Rs. {{$item->harvest_price}} </div>
                  <p> Remaining Quantity - &ensp;<strong>{{$item->harvest_quantity}}</strong> </p>
                  <p> Farmers Phone &emsp;&emsp;- &ensp;<strong>{{$item->harvest_phone}}</strong></p>
                  <p> Selling Type &emsp;&emsp;&emsp; - &ensp;<strong>{{$item->harvest_selling_type}}</strong> </p>
                  <br />
                  <br />
                  <br />
                  <form method="POST" action="{{route('harvest.buy')}}">
                     @csrf
                     <div class="add-2-cart"> <strong>Quantity:</strong>
                        <input type="hidden" name="harvest_name" value="{{$item->harvest_name}}">
                        <input type="hidden" name="harvest_price" value="{{$item->harvest_price}}">
                        <input type="number" name="quantity" min="1" max="99" value="1">
                        <input type="submit" value="Buy Now" name="Buy now"></input>

                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div class="products-tabs wf100 p80">
                  <nav>
                     <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-one-tab" data-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Description</a> </div>
                     <!-- <div class="nav nav-tabs" id="nav-tab" role="tablist"> <a class="nav-item nav-link active" id="nav-one-tab" data-toggle="tab" href="#nav-one" role="tab" aria-controls="nav-one" aria-selected="true">Description</a> <a class="nav-item nav-link" id="nav-two-tab" data-toggle="tab" href="#nav-two" role="tab" aria-controls="nav-two" aria-selected="true">Additional Information</a> <a class="nav-item nav-link" id="nav-three-tab" data-toggle="tab" href="#nav-three" role="tab" aria-controls="nav-three" aria-selected="false">Reviews</a> </div> -->
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                     <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                        <p>{{$item->harvest_description}} </p>
                     </div>
                     <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                        <table>
                           <tr>
                              <td>Weight</td>
                              <td>130 gm</td>
                           </tr>
                           <tr>
                              <td>Dimensions</td>
                              <td>70 x 40 x 50 cm</td>
                           </tr>
                           <tr>
                              <td>Small</td>
                              <td>Mauris consequat odio turpis, sed ultricies libero tincidunt i</td>
                           </tr>
                           <tr>
                              <td>Large</td>
                              <td>Condimentum nisi vitae, consequat libero integer sit amet velit neque. </td>
                           </tr>
                        </table>
                     </div>
                     <div class="tab-pane fade" id="nav-three" role="tabpanel" aria-labelledby="nav-three-tab">
                        <ul class="comments">
                           <!--Comment Start-->
                           <li class="comment">
                              <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                              <div class="comment-txt">
                                 <h6> Mason Gray </h6>
                                 <p> Personally I think a combination of all these methods is most effective, but in today’s post I will be focusing specifically on how to use and style WordPress’ built-in sticky post feature and highlighting it’s best use case based on my own experience. </p>
                                 <ul class="comment-time">
                                    <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                    <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                 </ul>
                              </div>
                              <ul class="children">
                                 <!--Comment Start-->
                                 <li class="comment">
                                    <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                                    <div class="comment-txt">
                                       <h6> Rog Kelly </h6>
                                       <p> Personally I think a combination of all these methods is most effective, but in today’s post I will be focusing specifically on how to use and style WordPress’ built-in sticky post feature and highlighting it’s best use case based on my own experience. </p>
                                       <ul class="comment-time">
                                          <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                          <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                       </ul>
                                    </div>
                                 </li>
                                 <!--Comment End-->
                              </ul>
                           </li>
                           <!--Comment End-->
                           <!--Comment Start-->
                           <li class="comment">
                              <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                              <div class="comment-txt">
                                 <h6> Harry Butler </h6>
                                 <p> Personally I think a combination of all these methods is most effective, but in today’s post I will be focusing specifically on how to use and style WordPress’ built-in sticky post feature and highlighting it’s best use case based on my own experience. </p>
                                 <ul class="comment-time">
                                    <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                    <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                 </ul>
                              </div>
                           </li>
                           <!--Comment End-->
                        </ul>
                        <div class="wf100 comment-form">
                           <h4>Leave a Review</h4>
                           <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                           <div class="comment-form-rating">
                              <label>Your rating</label>
                              <p class="stars"><span><a class="star-1" href="#">1</a><a class="star-2" href="#">2</a><a class="star-3" href="#">3</a><a class="star-4" href="#">4</a><a class="star-5" href="#">5</a></span></p>
                           </div>
                           <ul>
                              <li class="w3">
                                 <input type="text" class="form-control" placeholder="Full Name">
                              </li>
                              <li class="w3">
                                 <input type="text" class="form-control" placeholder="Email">
                              </li>
                              <li class="w3 np">
                                 <input type="text" class="form-control" placeholder="Subject">
                              </li>
                              <li class="full">
                                 <textarea class="form-control" placeholder="Write Comments"></textarea>
                              </li>
                              <li class="full">
                                 <button class="post-btn">Post Your Review</button>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   @endforeach

</div>
@endsection
<!--Causes End-->