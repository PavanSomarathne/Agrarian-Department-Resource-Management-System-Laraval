@extends('layouts.master')
@include('layouts/header')
<div class="wrapper home2">
   <!--Slider Start-->
   <section id="home-slider" class="owl-carousel owl-theme wf100">
            <div class="item">
            <div class="slider-caption h2slider">
                  <div class="container">
                     <!-- <strong>Save <span> & don’t waste our life</span> partner</strong> -->
                     <h1>Farmers' Pal</h1>
                     <p>Farmers <strong>Trusted</strong> Agricultural Needs Supplier</p>
                     <a href="harvest_shop" class="active">Shop Now</a> <a href="register">Join us Now</a> 
                  </div>
               </div>
               <img src="images/h2-slide1.jpg" alt=""> 
            </div>
            
            <div class="item">
            <div class="slider-caption h2slider">
                  <div class="container">
                     <h1>Buy Fresh Items</h1>
                     <p><strong>One Stop</strong> platform for vegitables and Grains</p>
                     <a href="harvest_shop" class="active">Shop Now</a> <a href="register">Join us Now</a> 
                  </div>
               </div>
               <img src="images/im21.jpg" alt=""> 
            </div>
            <div class="item">
            <div class="slider-caption h2slider">
                  <div class="container">
                     <!-- <strong>Save <span> & don’t waste our life</span> partner</strong> -->
                     <h1>News and Events</h1>
                     <p>Agricultural News and <strong>Subsidies</strong> in one Place</p>
                     <a href="harvest_shop" class="active">Shop Now</a> <a href="register">Join us Now</a>  
                  </div>
               </div>
               <img src="images/im22.jpg" alt=""> 
            </div>
         </section>
   <!--Slider End-->
   <!--Service Area Start-->
   <section class="services-area wf100">
            <div class="container">
               <ul>
                  <!--box  start-->
                  <li>
                     <div class="sinfo">
                        <img src="images/sericon1.png" alt="">
                        <h6>Information Management</h6>
                        
                     </div>
                  </li>
                  <!--box  end--> 
                  <!--box  start-->
                  <li>
                     <div class="sinfo">
                        <img src="images/sericon2.png" alt="">
                        <h6>Event <br> Management</h6>
                        
                     </div>
                  </li>
                  <!--box  end--> 
                  <!--box  start-->
                  <li>
                     <div class="sinfo">
                        <img src="images/sericon3.png" alt="">
                        <h6>Fertilizer Storage Management</h6>
                        
                        
                     </div>
                  </li>
                  <!--box  end--> 
                  <!--box  start-->
                  <li>
                     <div class="sinfo">
                        <img src="images/sericon4.png" alt="">
                        <h6>Cultivation Management</h6>
                        
                     </div>
                  </li>
                  <!--box  end--> 
                  <!--box  start-->
                  <li>
                     <div class="sinfo">
                        <img src="images/sericon5.png" alt="">
                        <h6>Online <br> Marketplace</h6>
                        
                     </div>
                  </li>
                  <!--box  end-->
               </ul>
            </div>
         </section>
   <!--Service Area End-->
   <!--About Section Start-->
   <section class="home2-about wf100 p100 gallery">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="video-img"> <a href="register" data-rel="prettyPhoto" title="Vimeo video"></a> <img src="images/i18.jpg" alt=""> </div>
                  </div>
                  <div class="col-md-7">
                     <div class="h2-about-txt">
                        <h3>About AGRO</h3>
                        
                        <p> Sri Lanka, affectionately called as the pearl of the Indian Ocean, is a tear drop shaped island of 65,000sq KM surrounded by sparkling blue green sea. Moderate climate throughout the year, fertile soil, freely available ground water with fairly distributed river net work in most parts and two monsoons which bring rains for the two main cultivation seasons are the key ecological factors of the country. 
<br><br>

                           With these ideal conditions,  agriculture sector has always performed as a major economic force in Sri Lanka, making a significant contribution to the national economy, food security and employment. At the same time agriculture is the livelihood of the majority in the rural sector and plays a key role in alleviating rural poverty. This has been well recognized from the time of independence and there has always been a cabinet portfolio set aside for the agriculture sector.
                           <br><br>
                           Ministry of  Agriculture  has realized this and is committed to make its utmost contribution to achieve its mission of bringing about prosperity through providing necessary guidance and co-ordination activities for sustainable development in Agriculture.
                           
                            </p>
                        <a class="aboutus" href="register">Join Us</a> 
                     </div>
                  </div>
               </div>
            </div>
         
         </section>
   <!--About Section End-->

   <!--Urgent Causes Start-->
   <!-- <section class="urgent-causes wf100 p80">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="section-title-2 white">
                  <h5>Urgent Cause</h5>
                  <h2>Stop Global Warming</h2>
               </div>
               <p> We need your support and help to Stop Globar Warning. Few generations ago it to seemed like the world’s resources were infinite, and the people needed only. </p>
               <div class="progress">
                  <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <ul class="funds">
                  <li class="text-left"><strong>73%</strong> Funded</li>
                  <li class="text-center"><strong>$948.00</strong> Raised</li>
                  <li class="text-right"><strong>$1750.00</strong> Required</li>
               </ul>
            </div>
            <div class="col-md-6">
               <div class="donation-amount">
                  <h5>Donation Amount</h5>
                  <form>
                     <ul class="radio-boxes">
                        <li>
                           <div class="radio custom">
                              <input name="donation" id="d1" type="radio" class="css-radio">
                              <label for="d1" class="css-label">$5</label>
                           </div>
                        </li>
                        <li>
                           <div class="radio custom">
                              <input name="donation" id="d2" type="radio" class="css-radio">
                              <label for="d2" class="css-label">$20</label>
                           </div>
                        </li>
                        <li>
                           <div class="radio custom">
                              <input name="donation" id="d3" type="radio" class="css-radio">
                              <label for="d3" class="css-label">$50</label>
                           </div>
                        </li>
                        <li>
                           <div class="radio custom">
                              <input name="donation" id="d4" type="radio" class="css-radio">
                              <label for="d4" class="css-label">$100</label>
                           </div>
                        </li>
                        <li>
                           <div class="radio custom">
                              <input name="donation" id="d5" type="radio" class="css-radio">
                              <label for="d5" class="css-label">$250</label>
                           </div>
                        </li>
                        <li>
                           <div class="radio custom">
                              <input name="donation" id="d6" type="radio" class="css-radio">
                              <label for="d6" class="css-label">$500</label>
                           </div>
                        </li>
                        <li>
                           <div class="radio custom">
                              <input name="donation" id="d7" type="radio" class="css-radio">
                              <label for="d7" class="css-label">$1000</label>
                           </div>
                        </li>
                        <li>
                           <div class="inputs">
                              <input class="enter" type="text" placeholder="$ Other">
                           </div>
                        </li>
                        <li class="form-submit">
                           <button type="submit">Continue to Donate</button>
                        </li>
                     </ul>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!--Urgent Causes End-->
   <!--Current Projects Start-->

   <!--Current Projects End-->
   <!--News & Articles Start-->
   <section class="h2-news wf100 p80">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <div class="section-title-2">
                  <h5>Read Our Latest</h5>
                  <h2>News & Subsidies</h2>
               </div>
            </div>
            <div class="col-md-6"> <a href="harvest_shop" class="view-more">Shop Now</a> </div>
         </div>
         <div class="row">

            <!--Blog Small Post Start-->
            @if(is_array($subsidies) || is_object($subsidies))
                @foreach ($subsidies as $item)
            <div class="blog-small-post col-5 m-3 mx-auto">
               <div class="post-thumb"> <a href="#"><i class="fas fa-link"></i></a> </div>
               <div class="post-txt" style="width: 100%;">
                  <span class="pdate"> <i class="fas fa-calendar-alt"></i> {{$item->date}}</span>
                  <h5><a href="#">{{$item->description}}</a></h5>
               </div>
               <!--Blog Small Post End-->
            </div>
               @endforeach
               @endif
         </div>
      </div>

   </section>
   <!--News & Articles End-->
   <!--Why Ecova + Facts Start-->
   <section class="why-ecova wf100">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <h1> Why Agro!</h1>
               <p>Robust All in one Platform for Farmers which is a one stop solution for all your agricultural needs.
               </p>
               <a href="register_farmer" class="cus">Signup to Join us</a>
            </div>
         </div>
      </div>
   </section>
   <!--Why Ecova + Facts End-->
   <!--Online Products Start-->
   <section class="online-shop wf100 p80">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="section-title-2 text-center">
                        
                        <h2>You Can Buy</h2>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!--Pro Box Start-->
                  <div class="col-md-3 col-sm-6">
                     <div class="product-box">
                        <div class="pro-thumb"> <img src="images/i15.jpg" alt=""></div>
                        <div class="pro-txt">
                           <h6><a href="#">Fruits</a></h6>
                           
                        </div>
                     </div>
                  </div>
                  <!--Pro Box End--> 
                  <!--Pro Box Start-->
                  <div class="col-md-3 col-sm-6">
                     <div class="product-box">
                        <div class="pro-thumb"> <img src="images/i14.jpg" alt=""></div>
                        <div class="pro-txt">
                           <h6><a href="#">Raw Rice</a></h6>
                           
                        </div>
                     </div>
                  </div>
                  <!--Pro Box End--> 
                  <!--Pro Box Start-->
                  <div class="col-md-3 col-sm-6">
                     <div class="product-box">
                        <div class="pro-thumb">  <img src="images/i17.jpg" alt=""></div>
                        <div class="pro-txt">
                           <h6><a href="#">Grain</a></h6>
                           
                        </div>
                     </div>
                  </div>
                  <!--Pro Box End--> 
                  <!--Pro Box Start-->
                  <div class="col-md-3 col-sm-6">
                     <div class="product-box">
                        <div class="pro-thumb">  <img src="images/i12.jpg" alt=""></div>
                        <div class="pro-txt">
                           <h6><a href="#">Vegetables</a></h6>
                           
                        </div>
                     </div>
                  </div>
                  <!--Pro Box End--> 
               </div>
            </div>
         </section>
   <!--Online Products End-->
   <!--InstaGram Start-->
   <div class="instagram">
            <ul>
               <li> <a href="harvest_shop"> <i class="fas fa-search"></i> </a> <img src="images/i10.jpg" alt=""> </li>
               <li> <a href="harvest_shop"> <i class="fas fa-search"></i> </a> <img src="images/i9.jpg" alt=""> </li>
               <li> <a href="harvest_shop"> <i class="fas fa-search"></i> </a> <img src="images/i2.jpg" alt=""> </li>
               <li> <a href="harvest_shop"> <i class="fas fa-search"></i> </a> <img src="images/i3.jpg" alt=""> </li>
               <li> <a href="harvest_shop"> <i class="fas fa-search"></i> </a> <img src="images/i6.jpg" alt=""> </li>
               <li> <a href="harvest_shop"> <i class="fas fa-search"></i> </a> <img src="images/i5.jpg" alt=""> </li>
               <li> <a href="harvest_shop"> <i class="fas fa-search"></i> </a> <img src="images/i11.jpg" alt=""> </li>
            </ul>
         </div>
   <!--InstaGram End-->
   <!--Footer Start-->
   <footer class="footer p-0 pt-3">
      <div class="w-100 d-flex flex-column align-items-center">
         <img width="150" class="mb-2" src="images/agro.png" alt="">
         <div class="text-white mb-3">ADRMS Devs</div>
      </div>
   </footer>
   <!--Footer End-->
</div>