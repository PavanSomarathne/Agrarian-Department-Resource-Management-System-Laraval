@extends('layouts.master')
@include('layouts/header')

<section class="wf100 p80">
    <div class="container d-flex justify-content-center">
   
    <section class="shop wf100 p80">
    <div class="myaccount-form">

                <div class="row">
                    <div class="col-lg-8">
                        <h3>Billing Details</h3>
                        <form class="row contact_form" id="confirmForm">
                            <div class="col-md-6 form-group p_star">
                                <span class="placeholder ml-2">Name *</span>
                                <input type="text" class="form-control" id="first" name="fname" placeholder="" value="{{$data->userName}}" required>

                            </div>
                            <div class="col-md-6 form-group p_star">
                                <span class="placeholder ml-2">Email Address</span>
                                <input type="text" class="form-control" id="email" name="compemail" placeholder="Email Address" value="{{$data->userEmail}}" disabled>

                            </div>

                            <div class="col-md-6 form-group p_star">
                                <span class="placeholder ml-2">Phone Number *</span>
                                <input type="text" class="form-control" id="number" name="pnumber" placeholder="" value="{{$data->userPhone}}" required pattern="(0)\d{9}">

                            </div>

                            <div class="col-md-6 form-group p_star">
                            <span class="placeholder ml-2">Postcode/ZIP</span>
                                <input type="text" class="form-control" id="zip" name="zip" placeholder="" value="">

                            </div>
                            
                            <!--<div class="col-md-12 form-group p_star">
                            <select class="country_select">
                                <option value="1">Country</option>
                                <option value="2">Country</option>
                                <option value="4">Country</option>
                            </select>
                        </div>-->
                            <div class="col-md-12 form-group p_star">
                                <span class="placeholder ml-2">Address *</span>
                                <textarea class="form-control" name="address" id="message" rows="1" placeholder="" required >{{$data->userAddress}}</textarea>
                            </div>
                            <!-- <div class="col-md-12 form-group p_star">
                                <span class="placeholder ml-2">District</span>
                                <select class="country_select form-control" name="district">
                                    <option value="">District</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="2">District</option>
                                    <option value="4">District</option>
                                </select>
                            </div> -->
                        
                            <!-- <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="selector">
                                <label for="f-option2">Create an account?</label>
                            </div>
                        </div> -->
                            <!--<div class="col-md-12 form-group mb-0">
                            <div class="creat_account">
                                <h3>Shipping Details</h3>
                                <input type="checkbox" id="f-option3" name="selector">
                                <label for="f-option3">Ship to a different address?</label>
                            </div>
                            <textarea class="form-control" name="message" id="message" rows="1" placeholder="Order Notes"></textarea>
                        </div>-->
                        </form>
                    </div>
     

                <div class="col-lg-4 card p-4">
                    <div class="order_box">
                        <h3 class="text-center">Your Order</h3>
                      
                            <div><a href="#">
                                    <h5 class="text-center">{{$data->harvest_name}} - Rs.{{$data->harvest_price}}  </h5>
                                </a></div>
                                <div><a href="#">
                                    <h5 class="text-center"><span>X</span></h5>
                                </a></div>
                                <div><a href="#">
                                    <h5 class="text-center"><span>{{$data->quantity}}</span></h5>
                                </a></div>
                           

                                <div><h4 class="text-center"><a href="">Total <span class="middle ">-</span>Rs.{{$data->total}}<span class="last"></span></a></div>
                          
                        
                        
                        
                     
                        <div class="creat_account">
                            <input class="mx-auto" type="checkbox" id="f-option4" name="selector">
                            <label for="f-option4 text-center">I’ve agreed to pay full amount as  </label>
                            <a href="#">Cash On Delivery</a>
                        </div>
                        <div class="text-center mt-3">
                           <form action="/harvest_confirm">
                            <button type="submit" name="orderConfirm" class=" register">Order Confirmation</button>
                           </form>
                           </div>
                        </form>
                        <!-- <div class="text-center">
                          <a class="button button-paypal"  onclick="document.getElementById('confirmForm').submit();">Order Confirmation</a>
                        </div> -->
                    </div>
                </div>

                </div>
             
            </div>
         </section>

    </div>
</section>

<!--Causes End-->