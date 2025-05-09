<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('theme/assets/images/fav.png')}}">
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
                              <a href="contact.html" class="rts-btn btn-header btn-transparent">Get a Quote
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
         </div>
      </header>

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
                  <a href="contact.html" class="rts-btn btn-primary">Let's talk</a>
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
      <!-- header area end -->
      @yield('content')

      <!-- rts footer area start -->
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
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="project.html">Projects</a></li>
                            <li><a href="blog-grid.html">Updates</a></li>
                            <li><a href="vision.html">Mission</a></li>
                            <li><a href="company-history.html">Inside</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="company-story.html">History</a></li>
                         </ul>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
    <div class="container">
       <div class="row g-5">
          <div class="col-lg-4">
             <div class="footer-wrapper-left-one">
                <a href="#" class="logo">
                <img width="200" src="{{asset('uploads/logo.jpeg')}}" alt="logo">
                </a>
                <p class="disc">
                   we’re committed to elevating the construction experience for our clients. With a passion for
                   innovation and quality craftsmanship,
                </p>
                <div class="social-area-wrapper-one">
                   <ul>
                      <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                      <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                   </ul>
                </div>
             </div>
          </div>
          <div class="col-lg-8">
             <div class="footer-wrapper-right">
                <div class="single-nav-area-footer use-link">
                   <h4 class="title">Useful Links</h4>
                   <ul>
                      <li><a href="about.html"><i class="fa-regular fa-arrow-right-long"></i>About Us</a></li>
                      <li><a href="about.html"><i class="fa-regular fa-arrow-right-long"></i>Our Gallery</a></li>
                      <li><a href="service.html"><i class="fa-regular fa-arrow-right-long"></i>Our Services</a>
                      </li>
                      <li><a href="team.html"><i class="fa-regular fa-arrow-right-long"></i>Our Team</a></li>
                      <li><a href="contact.html"><i class="fa-regular fa-arrow-right-long"></i>Contact Us</a></li>
                   </ul>
                </div>
                <div class="single-nav-area-footer use-link">
                   <h4 class="title">Quick Services</h4>
                   <ul>
                      <li><a href="service-single.html"><i class="fa-regular fa-arrow-right-long"></i>General
                         Contracting</a>
                      </li>
                      <li><a href="service-single.html"><i class="fa-regular fa-arrow-right-long"></i>Project
                         Management</a>
                      </li>
                      <li><a href="service-single.html"><i class="fa-regular fa-arrow-right-long"></i>New
                         Construction</a>
                      </li>
                      <li><a href="service-single.html"><i class="fa-regular fa-arrow-right-long"></i>Renovations
                         &
                         Remodeling</a>
                      </li>
                      <li><a href="service-single.html"><i class="fa-regular fa-arrow-right-long"></i>Interior
                         Finishing</a>
                      </li>
                   </ul>
                </div>
                <div class="single-nav-area-footer news-letter">
                   <h4 class="title">Newsletter</h4>
                   <p>Aplications prodize before front end ortals visualize front end</p>
                   <form action="#">
                      <input type="email" placeholder="Email Address" required="">
                      <button class="btn-subscribe mt--15">Subscribe Now</button>
                   </form>
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
                               <li><a href="terms-of-condition.html">Terms of use </a></li>
                               <li><a href="privacy-policy.html"> Privacy</a></li>
                               <li><a href="privacy-policy.html">Environmental Policy</a></li>
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
