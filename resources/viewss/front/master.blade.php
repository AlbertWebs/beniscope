<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
      <title>Beniscope - Construction Building & Renovation HTML Template</title>
      <!-- fontawesome css -->
      <link rel="stylesheet" preload="" href="{{asset('theme/assets/css/plugins/fontawesome.css')}}">
      <link rel="stylesheet" preload="" href="{{asset('theme/assets/css/plugins/aos.css')}}">
      <!-- swiper css-->
      <link rel="stylesheet" preload="" href="{{asset('theme/assets/css/plugins/odometer.css')}}">
      <link rel="stylesheet" preload="" href="{{asset('theme/assets/css/plugins/swiper.css')}}">
      <link rel="stylesheet" preload="" href="{{asset('theme/assets/css/plugins/metismenu.css')}}">
      <link rel="stylesheet" preload="" href="{{asset('theme/assets/css/plugins/magnifying-popup.css')}}">
      <!-- bootstrap css -->
      <link rel="stylesheet" preload="" href="{{asset('theme/assets/css/vendor/bootstrap.min.css')}}">
      <!-- custom css here -->
      <link rel="stylesheet" preload="" href="{{asset('theme/assets/css/style.css')}}">
   </head>
   <body>
      <!-- header area five -->
      <header class="header-five">
         <div class="header-top-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="header-top-wrapper-5">
                        <a href="{{url('/')}}" class="logo-area">
                        <img style="width:150px" src="{{asset('uploads/logo.png')}}" alt="logo">
                        </a>
                        <div class="right-area-info">
                           <div class="single-contact-info">
                              <div class="logo">
                                 <i class="fa-solid fa-phone"></i>
                              </div>
                              <div class="info">
                                 <span class="pre">Call Anytime 24/7</span>
                                 <a href="#">
                                    <h6 class="title">
                                       (+254) 45 717 709
                                    </h6>
                                 </a>
                              </div>
                           </div>
                           <div class="single-contact-info">
                              <div class="logo">
                                 <i class="fa-regular fa-envelope"></i>
                              </div>
                              <div class="info">
                                 <span class="pre">Mail For Support</span>
                                 <a href="#">
                                    <h6 class="title">
                                       info@beniscope.com
                                    </h6>
                                 </a>
                              </div>
                           </div>
                           <div class="single-contact-info">
                              <div class="logo">
                                 <i class="fa-solid fa-location-dot"></i>
                              </div>
                              <div class="info">
                                 <span class="pre">Office Address</span>
                                 <a href="#">
                                    <h6 class="title">
                                       Prestige Plaza, Nairobi, Kenya
                                    </h6>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom header--sticky">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="header-bottom-five-wrapper">
                        <div class="logo-hide-show">
                           <img style="height:50px; border-radius:3px" src="{{asset('uploads/logo.jpeg')}}" alt="logo">
                        </div>
                        <div class="nav-area">
                           @include('front.desktop-menu')
                        </div>
                        <a href="{{url('/')}}/contact-us" class="rts-btn btn-primary"><span class="fa fa-edit"></span> &nbsp; Request A Quote</a>
                        <div class="nav-btn menu-btn" id="menu-btn">
                           <img src="{{asset('theme/assets/images/logo/bar.svg')}}" alt="nav-iamge">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area five end -->
      <div id="side-bar" class="side-bar header-two">
         <button class="close-icon-menu"><i class="far fa-times"></i></button>
         <!-- inner menu area desktop start -->
         <div class="inner-main-wrapper-desk">
            <div class="thumbnail">
               <img src="assets/images/banner/04.jpg" alt="elevate">
            </div>
            <div class="inner-content">
               <h4 class="title">We Build Building and Great Constructive Homes.</h4>
               <p class="disc">
                  We successfully cope with tasks of varying complexity, provide long-term guarantees and regularly
                  master new technologies.
               </p>
               <div class="footer">
                  <h4 class="title">Got a project in mind?</h4>
                  <a href="{{url('/')}}/contact-us" class="rts-btn btn-primary">Let's talk</a>
               </div>
            </div>
         </div>
         <!-- mobile menu area start -->
         <div class="mobile-menu d-block d-xl-none">
            <nav class="nav-main mainmenu-nav mt--30">
               @include('front.mobile-menu')
            </nav>
            <div class="social-wrapper-one">
               <ul>
                  <li>
                     <a href="#">
                     <i class="fa-brands fa-facebook-f"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <i class="fa-brands fa-twitter"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <i class="fa-brands fa-youtube"></i>
                     </a>
                  </li>
                  <li>
                     <a href="#">
                     <i class="fa-brands fa-linkedin-in"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <!-- mobile menu area end -->
      </div>
      @yield('content')
      <!-- rts footer five area start -->
      <div class="rts-footer-area-five">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="footer-five-wrapper-main">
                     <div class="row g-5  pb--100 pb_sm--50">
                        <div class="col-lg-6">
                           <div class="footer-five-left-area">
                              <h2 class="title">Start your journey to <br>
                                 better business
                              </h2>
                              <form action="#">
                                 <input class="email" type="text" placeholder="Enter your email here...">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                    I agree to the Privacy Policy and give my permission to process my
                                    personal data for the purposes specified in the Privacy Policy.
                                    </label>
                                 </div>
                                 <button class="rts-btn btn-primary">Send Mail</button>
                              </form>
                           </div>
                        </div>
                        <div class="col-lg-6">
                           <div class="row justify-content-end align-items-end">
                              <div class="col-lg-6">
                                 <div class="single-usefull-name-five-footer">
                                    <h5 class="title">Quick Services</h5>
                                    <ul>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>General
                                          Contracting</a>
                                       </li>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>Project
                                          Management</a>
                                       </li>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>New
                                          Construction</a>
                                       </li>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>Renovations &
                                          Remodeling</a>
                                       </li>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>Interior
                                          Finishing</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="single-usefull-name-five-footer">
                                    <ul>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>Project
                                          Consultation</a>
                                       </li>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>Design &
                                          Planning</a>
                                       </li>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>Residential
                                          Construction</a>
                                       </li>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>Commercial
                                          Construction</a>
                                       </li>
                                       <li><a href="service-single.html"><i class="fa-light fa-arrow-right"></i>Renovation
                                          Services</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="footer-contact-infor-wrapper-5">
                              <div class="row g-5">
                                 <div class="col-lg-4">
                                    <div class="single-cotact-info-wrapper">
                                       <div class="icon">
                                          <i class="fas fa-phone-alt"></i>
                                       </div>
                                       <div class="inner">
                                          <span>Call Us Now</span>
                                          <a href="#">
                                             <h5 class="title">(+254) 45 717 709 </h5>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="single-cotact-info-wrapper">
                                       <div class="icon">
                                          <i class="fas fa-envelope"></i>
                                       </div>
                                       <div class="inner">
                                          <span>Mail Anytime</span>
                                          <a href="#">
                                             <h5 class="title">info@beniscope.com</h5>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-lg-4">
                                    <div class="single-cotact-info-wrapper">
                                       <div class="icon">
                                          <i class="fas fa-map-marker-alt"></i>
                                       </div>
                                       <div class="inner">
                                          <span>Office Address</span>
                                          <a href="#">
                                             <h5 class="title">Prestige Plaza, Nairobi, Kenya</h5>
                                          </a>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="copyright-5-wrapper">
                              <p class="mb-0">
                                 Copyright &copy;
                                 <script>
                                    document.write(
                                        new Date().getFullYear()
                                    )
                                 </script>
                                 Beniscope EastAfrica Limited. All Rights Reserved | Powered By Designekta Studio
                              </p>
                              <ul>
                                 <li><a href="{{route('terms-of-condition')}}">Terms of use</a></li>
                                 <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- rts footer five area end -->
      <!-- progress area start -->
      <!-- <div id="elevate-load">
         <div class="loader-wrapper">
             <div class="lds-ellipsis">
                 <div></div>
                 <div></div>
                 <div></div>
                 <div></div>
             </div>
         </div>
         </div> -->
      <!-- progress area end -->

      <!-- progress area start -->
      <div class="progress-wrap">
         <svg class="progress-circle svg-content" width="100%" height="100%" viewbox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
         </svg>
      </div>
      <!-- progress area end -->
      <!-- offcanvase search -->
      <div class="search-input-area">
         <div class="container">
            <div class="search-input-inner">
               <div class="input-div">
                  <input class="search-input autocomplete" type="text" placeholder="Search by keyword or #">
                  <button><i class="far fa-search"></i></button>
               </div>
            </div>
         </div>
         <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
      </div>
      <div id="anywhere-home" class=""></div>
      <!-- scripts -->
      <script src="{{asset('theme/assets/js/plugins/jquery.js')}}"></script>
      <script src="{{asset('theme/assets/js/vendor/bootstrap.min.js')}}"></script>
      <script src="{{asset('theme/assets/js/plugins/odometer.js')}}"></script>
      <script src="{{asset('theme/assets/js/plugins/jquery-appear.js')}}"></script>
      <script src="{{asset('theme/assets/js/plugins/metismenu.js')}}"></script>
      <script src="{{asset('theme/assets/js/plugins/swiper.js')}}"></script>
      <script src="{{asset('theme/assets/js/plugins/aos.js')}}"></script>
      <script src="{{asset('theme/assets/js/plugins/nice-select.js')}}"></script>
      <script src="{{asset('theme/assets/js/plugins/smooth-scroll.js')}}"></script>
      <script src="{{asset('theme/assets/js/vendor/waw.js')}}"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuSiPhoDaOJ7aqtJVtQhYhLzwwJ7rQlmA"></script>
      <script src="{{asset('theme/assets/js/vendor/marker.js')}}"></script>
      <script src="{{asset('theme/assets/js/vendor/map-content.js')}}"></script>
      <script src="{{asset('theme/assets/js/vendor/info-box.js')}}"></script>
      <script src="{{asset('theme/golfy/assets/js/plugins/magnific-popup.js')}}"></script>
      <script src="{{asset('theme/assets/js/plugins/contact.form.js')}}"></script>
      <script src="{{asset('theme/assets/js/main.js')}}"></script>
   </body>
</html>
