
 <header class="header-style-2">
    <nav class="navbar navbar-expand-lg">
       <a class="navbar-brand" href="/"><img width="120px" src={{asset('images/agro.png')}} alt=""></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="index-2.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Home </a>
                <ul class="dropdown-menu">
                   <li><a href="index-2.html">Home One</a></li>
                   <li><a href="home-two.html">Home Two</a></li>
                   <li><a href="home-three.html">Home Three</a></li>
                </ul>
             </li>
             <!-- <li class="nav-item"> <a class="nav-link" href="about.html">About</a> </li> -->
             <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="events-grid.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Events </a>
                <ul class="dropdown-menu">
                   <li><a href="events-grid.html">Events Grid</a></li>
                   <li><a href="events-grid-2.html">Events Grid Two</a></li>
                   <li><a href="events-grid-3.html">Events Grid Three</a></li>
                   <li><a href="events-list.html">Events List</a></li>
                   <li><a href="events-list-two.html">Events List Two</a></li>
                   <li><a href="event-details.html">Event Details</a></li>
                </ul>
             </li> -->
             <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="causes.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Causes </a>
                <ul class="dropdown-menu">
                   <li><a href="causes.html">Causes Grid</a></li>
                   <li><a href="causes-list.html">Causes List</a></li>
                   <li><a href="causes-details.html">Causes Details</a> </li>
                </ul>
             </li> -->
             <li class="nav-item dropdown">
                <a class="nav-link " href="harvest_shop" role="button"> Shop </a>
               
             </li>
             <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Pages </a>
                <ul class="dropdown-menu">
                   <li>
                      <a href="#">Projects</a>
                      <ul class="dropdown-menu">
                         <li><a href="projects.html">Projects</a> </li>
                         <li><a href="projects-grid.html">Projects Grid</a> </li>
                         <li><a href="projects-grid-two.html">Projects Grid Two</a> </li>
                         <li><a href="projects-list.html">Projects List</a> </li>
                         <li><a href="projects-details.html">Project Details</a> </li>
                      </ul>
                   </li>
                   <li>
                      <a href="#">Shop</a>
                      <ul class="dropdown-menu">
                         <li><a href="shop.html">Shop</a> </li>
                         <li><a href="shop-two.html">Shop Two</a> </li>
                         <li><a href="shop-details.html">Shop Details</a> </li>
                      </ul>
                   </li>
                   <li>
                      <a href="team.html">Team</a>
                      <ul class="dropdown-menu">
                         <li><a href="team.html">Team One</a> </li>
                         <li><a href="team-two.html">Team Two</a> </li>
                         <li><a href="team-details.html">Team Details</a> </li>
                      </ul>
                   </li>
                   <li>
                      <a href="#">Gallery</a>
                      <ul class="dropdown-menu">
                         <li><a href="gallery-grid.html">Gallery Grid</a> </li>
                         <li><a href="gallery-full.html">Gallery Full</a> </li>
                         <li><a href="gallery-masonry.html">Gallery Masonry</a> </li>
                      </ul>
                   </li>
                   <li><a href="testimonials.html">Testimonials</a> </li>
                   <li><a href="donation.html">Donation</a> </li>
                   <li><a href="my-account.html">My Account</a> </li>
                   <li><a href="coming-soon.html">Coming Soon</a> </li>
                   <li><a href="page-404.html">404 Error</a> </li>
                </ul>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="contact.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Contact </a>
                <ul class="dropdown-menu">
                   <li><a href="contact-one.html">Profile</a> </li>
                   <li><a href="contact-two.html">Contact Two</a> </li>
                </ul>
             </li> -->
             <!-- <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#search"> <i class="fas fa-search mt-1"></i> </a> </li> -->
          </ul>
          <ul class="topnav-right nav-item dropdown">
             @guest
             @if (Route::has('login') || Route::has('register'))
             <li class="login-reg"> <a href="{{ route('login') }}">Login</a> | <a href="{{ route('register') }}">Signup</a> | <a href="{{ route('register_farmer') }}">Signup - Farmer</a> </li>
             @endif
             @else
             <div class="d-flex align-items-center">
             <li class="p-0 m-0">
             <img width="40px" style="border-radius: 25px;" src="{{ Auth::user()->profile_image }}" class="user-img" alt="user avatar">
             </li>
             <li class="login-reg"><a class="nav-link dropdown-toggle" href="contact.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <b>Hi ! {{ Auth::user()->name }}</b></a>
            <ul class="dropdown-menu">
               @if (Auth::user()->type != 'User')
                   <li><a href="dashboard">Dashboard &emsp;&emsp; </a> </li> 
                   @endif
                   <li><a href="contact-two.html">Profile 	&emsp;&emsp;  </a> </li>
                   <li><a href="" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log Out</a> </li>
                </ul>
            </li>
             </div>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
             </form>
             
             @endguest
          </ul>
       </div>
    </nav>
 </header>
 <div id="search">
    <button type="button" class="close">×</button>
    <form class="search-overlay-form">
       <input type="search" value="" placeholder="type keyword(s) here" />
       <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </form>
 </div>


 <!--Header End-->
 

