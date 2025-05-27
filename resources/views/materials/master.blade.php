<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      {{--  --}}
        <title>{{ $materials->title }} | Beniscope Construction Materials</title>
        <meta name="description" content="{{ Str::limit(strip_tags($materials->description), 160) }}">
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Open Graph Meta Tags -->
        <meta property="og:title" content="{{ $materials->title }} | Beniscope Construction Materials">
        <meta property="og:description" content="{{ Str::limit(strip_tags($materials->description), 160) }}">
        <meta property="og:image" content="{{ $materials->image }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:type" content="product">
        <meta property="og:site_name" content="Beniscope">
        <meta property="og:locale" content="en_KE">

        <!-- Twitter Meta Tags -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $materials->title }} | Beniscope">
        <meta name="twitter:description" content="{{ Str::limit(strip_tags($materials->description), 160) }}">
        <meta name="twitter:image" content="{{ $materials->image }}">
        <meta name="twitter:site" content="@beniscope">
        <meta name="twitter:creator" content="@beniscope">

        <!-- Product Meta -->
        <meta property="product:price:amount" content="{{ $materials->price }}">
        <meta property="product:price:currency" content="KES">

        <!-- Geo & Contact Meta -->
        <meta name="geo.region" content="KE">
        <meta name="geo.placename" content="Nairobi, Kenya">
        <meta name="geo.position" content="-1.2921;36.8219">
        <meta name="ICBM" content="-1.2921, 36.8219">
        <meta name="contact.phone" content="+25445717709">
        <meta name="contact.address" content="Prestige Plaza, Nairobi, Kenya">
        <meta name="contact.country" content="Kenya">

      {{--  --}}
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
   <body class="shop-body shop-single-body">
      <!-- header area start -->
    <header class="heder-one">
        <div class="header-two-container">
        <div class="row">
            <div class="col-12">
                <div class="header-main-wrapper">
                    <div class="logo-area">
                    <a href="{{url('/')}}" class="logo">
                    <img src="{{asset('uploads/logo.jpeg')}}" alt="image-logo">
                    </a>
                    </div>
                    <!-- header right start -->
                    <div class="rts-header-right position-static">
                    <!-- top header -->
                    <div class="top">
                        <div class="end-top">
                            <div class="single-info">
                                <div class="icon">
                                <i class="fa-light fa-mobile"></i>
                                </div>

                                <a href="#">(+254) 45 717 709</a>
                            </div>
                            <div class="single-info">
                                <div class="icon"><i class="fa-regular fa-envelope"></i></div>
                                <a href="mailto:info@beniscope.com"> info@beniscope.com</a>
                            </div>
                        </div>
                        <div class="start-top">
                            <div class="social-header">
                                <span>Follow Us On:</span>
                                <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- top header end -->
                    <!-- bottom header start -->
                    <div class="bottom">
                        <!-- header style two -->
                        <!-- nav area start -->
                        <div class="nav-area">
                            @include('front.desktop-menu')
                        </div>
                        <!-- nav-area end -->
                        <!-- header style two End -->
                        <div class="right-area">
                            <div class="icon-area">
                                <div class="search">
                                <i class="fa-regular fa-magnifying-glass"></i>
                                </div>
                            </div>
                            <a href="{{url('/')}}/contact-us" class="rts-btn btn-header btn-transparent">Get a Quote
                            <img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow">
                            </a>
                            <div class="nav-btn menu-btn">
                                <img src="{{asset('theme/assets/images/logo/bar.svg')}}" alt="nav-iamge">
                            </div>
                        </div>
                    </div>
                    <!-- bottom header end -->
                    </div>
                    <!-- header right end -->
                </div>
            </div>
        </div>
    </header>


      @yield('content')

      <div class="rts-footer-area rts-section-gapTop bg_footer-1 bg_image">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="contact-area-footer-top">
                <div class="single-contact-area-box">
                   <div class="icon">
                      <i class="fas fa-phone-alt"></i>
                   </div>
                   <h6 class="title">Call Us Now</h6>
                   <a href="#">(+254) 45 717 709</a>
                   <a href="#">(+254) 45 717 709</a>
                </div>
                <div class="single-contact-area-box">
                   <div class="icon">
                      <i class="fa-solid fa-clock"></i>
                   </div>
                   <h6 class="title">Office Time</h6>
                   <a href="#">Mon-Fri: 9:00 am to 5:00 pm <br>
                   Sat: 9:00 am to 2:00 pm</a>
                </div>
                <div class="single-contact-area-box">
                   <div class="icon">
                      <i class="fa-solid fa-envelope"></i>
                   </div>
                   <h6 class="title">Need Support</h6>
                   <a href="#">support@beniscope.com</a>
                   <a href="#">info@beniscope.com</a>
                </div>
                <div class="single-contact-area-box">
                   <div class="icon">
                      <i class="fa-sharp fa-solid fa-location-dot"></i>
                   </div>
                   <h6 class="title">Our Address</h6>
                   <a href="#">Prestige Plaza, Ngong Road, Kilimani <br>
                   Nairobi Kenya
                </a>
                </div>
             </div>
          </div>
       </div>
    </div>

    <div class="container-full">
       <div class="row">
          <div class="col-lg-12">
             <div class="nav-footer-wrapper-one">
                <div class="container">
                   <div class="row">
                      <div class="col-lg-12">
                         <ul class="footer-float-nav">
                            <li><a href="{{route('who-we-are')}}">About Us</a></li>
                            <li><a href="{{route('what-we-do')}}">What We Do</a></li>
                            <li><a href="{{route('news-updates')}}">News</a></li>
                            <li><a href="{{route('contact-us')}}">Contact Us</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>

    <div class="container-full copyright-area-one">
       <div class="row">
          <div class="col-lg-12">
             <div class="container">
                <div class="row">
                   <div class="col-lg-12">
                      <div class="copyright-wrapper">
                         <p class="mb-0">
                            Copyright &copy;
                            <script>
                               document.write(
                                   new Date().getFullYear()
                               )
                            </script>
                            Beniscope Construction Limited. All Rights Reserved | Powered By <a href="https://designekta.com">Designekta Studios</a>
                         </p>
                         <div class="right-nav">
                            <ul>
                               <li><a href="{{route('terms-of-condition')}}">Terms of use </a></li>
                               <li><a href="{{route('privacy-policy')}}"> Privacy Policy</a></li>
                               <li><a href="{{route('environmental-policy')}}">Environmental Policy</a></li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
      <!-- rts footer area end -->
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
      <!-- rtl btn area start -->
      <div class="rtl-ltr-switcher-btn">
         <span class="rtl show">View RTL</span>
         <span class="ltr">View LTR</span>
      </div>
      <!-- rtl btn area end -->
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
      <script src="{{asset('theme/assets/js/vendor/marker.js')}}"></script>
      <script src="{{asset('theme/assets/js/vendor/map-content.js')}}"></script>
      <script src="{{asset('theme/assets/js/vendor/info-box.js')}}"></script>
      <script src="{{asset('theme/golfy/assets/js/plugins/magnific-popup.js')}}"></script>
      <script src="{{asset('theme/assets/js/plugins/contact.form.js')}}"></script>
      <script src="{{asset('theme/assets/js/main.js')}}"></script>
   </body>
</html>