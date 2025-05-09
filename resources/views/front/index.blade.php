@extends('front.master')

@section('content')
    <!-- banner swiper area five -->
    <div class="banner-swiper-area-five">
        <div class="swiper mySwiper-banner-five" dir="ltr">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rts-banner-area-five bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="rts-banner-area-inner-five">
                                        {{-- <span class="pre">Precision & Quality</span> --}}
                                        <h1 class="title">Comprehensive Construction <br>
                                            <span>Consultancy</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="swiper-slide">
                    <div class="rts-banner-area-five two bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="rts-banner-area-inner-five">
                                        <span class="pre">Precision & Quality
                                        </span>
                                        <h1 class="title">Efficient Project <br>
                                            Management
                                            <span>Solutions</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rts-banner-area-five three bg_image">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="rts-banner-area-inner-five">
                                        <span class="pre">Hospitality & Leisure
                                        </span>
                                        <h1 class="title">Your Partner in  <br>

                                            <span>Construction Success</span>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- banner swiper area five end -->




    <!-- rts about area start -->
    <div class="rts-about-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-4">
                    <div class="about-thumbnail-five">
                        <div class="reveal-item overflow-hidden aos-init">
                            <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end">
                            </div>
                            <img style="min-height:600px; object-fit:cover; " src="{{asset('theme/assets/images/about/about.jpeg')}}" alt="thumbnail">
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 mt_lg--30 mt_md--30 mt_sm--30 pl--40 mr-dec-about-five pl_sm--10">
                    <div class="about-right-area-five">
                        <div class="title-between-style-five mb--35">
                            <div class="title-left-align-five">
                                <span class="pre">About Beniscope</span>
                                <h2 class="title">We’re The Leader In <br>
                                    Construction Industry</h2>
                            </div>
                            <div class="counter-area-about-five">
                                <h2 class="counter title"><span class="odometer" data-count="9">00</span>+
                                </h2>
                                <span class="bottom">Years Of Experience</span>
                            </div>
                        </div>
                        <div class="about-feature-area-wrapper-five">
                            <div class="left-card-about-five">
                                <div class="top-area">
                                    <p>Providing The Best Industry Standard Solutions:</p>
                                </div>
                                <div class="bottom-area">
                                    <div class="single-feature">
                                        <div class="icon">
                                            <div class="ico">
                                                <img src="{{asset('theme/assets/images/about/icon/03.svg')}}" alt="icon">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h6 class="title">NCA Certified </h6>
                                            <p>Beniscope – NCA Certified for Quality and Excellence.</p>
                                        </div>
                                    </div>
                                    <div class="single-feature">
                                        <div class="icon">
                                            <div class="ico">
                                                <img src="{{asset('theme/assets/images/about/icon/04.svg')}}" alt="icon">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h6 class="title">Innovative Solution</h6>
                                            <p>Delivering Innovative Solutions for Exceptional Project Outcomes. </p>
                                        </div>
                                    </div>
                                    <div class="single-feature">
                                        <div class="icon">
                                            <div class="ico">
                                                <img src="{{asset('theme/assets/images/about/icon/05.svg')}}" alt="icon">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <h6 class="title">Experienced Team</h6>
                                            <p>An Experienced Team Committed to Delivering Exceptional Project Results.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="right-card-about-five">
                                <p class="disc">
                                    “We are the architects of your vision. Whatever project you want to build and whatever goals you aim to achieve, we bring the expertise to make it happen.
                                    ”
                                </p>
                                <a href="{{url('/')}}/who-we-are" class="rts-btn btn-primary">About Company<img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts about area end -->


    <!-- rts service artea start -->
    <div class="rts-service-area-five">
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="service-main-wrapper-5">
                        <div class="wrapper-column-service-area">
                            <div class="single-service-area-five bottom-border-none">
                                <div class="icon-area">
                                    <div class="icon">
                                        <img src="{{asset('theme/assets/images/service/13.svg')}}" alt="service">
                                    </div>
                                    <p>Service 01</p>
                                </div>
                                <a href="#">
                                    <h5 class="title">Residential Construction</h5>
                                </a>
                                <p class="disc">
                                    We set the standard in residential construction with innovation, quality craftsmanship, and a commitment to delivering exceptional living spaces.

                                </p>
                                <a class="read-more" href="#">Learn More</a>
                            </div>
                            <div class="single-service-area-five">
                                <div class="icon-area">
                                    <div class="icon">
                                        <img src="{{asset('theme/assets/images/service/13.svg')}}" alt="service">
                                    </div>
                                    <p>Service 03</p>
                                </div>
                                <a href="#">
                                    <h5 class="title">Building Design Services</h5>
                                </a>
                                <p class="disc">
                                    We lead the way in building design services, transforming concepts into striking, functional spaces through innovative solutions and expert craftsmanship.

                                </p>
                                <a class="read-more" href="#">Learn More</a>
                            </div>
                        </div>
                        <div class="service-wrapper-bg-mid-5 bg_image">
                            <div class="service-inner-title-wrapper-five">
                                <span class="pre">Services</span>
                                <h2 class="title">We’re The Leader In <br>
                                    The Industry</h2>
                                <p class="disc">
                                    We set the standard with innovation, quality, and unmatched expertise, leading the way in delivering exceptional results across the industry.

                                </p>
                                <a href="{{route('get-quotation')}}" class="rts-btn btn-primary">Get A Free Quote<img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow"></a>
                            </div>
                        </div>
                        <div class="wrapper-column-service-area">
                            <div class="single-service-area-five bottom-border-none">
                                <div class="icon-area">
                                    <div class="icon">
                                        <img src="{{asset('theme/assets/images/service/13.svg')}}" alt="service">
                                    </div>
                                    <p>Service 02</p>
                                </div>
                                <a href="#">
                                    <h5 class="title">Renovation & Remodeling</h5>
                                </a>
                                <p class="disc">
                                    We excel in renovation and remodeling, revitalizing spaces with quality craftsmanship and a fresh, modern approach.

                                </p>
                                <a class="read-more" href="#">Learn More</a>
                            </div>
                            <div class="single-service-area-five">
                                <div class="icon-area">
                                    <div class="icon">
                                        <img src="{{asset('theme/assets/images/service/13.svg')}}" alt="service">
                                    </div>
                                    <p>Service 04</p>
                                </div>
                                <a href="#">
                                    <h5 class="title">Post Construction Services</h5>
                                </a>
                                <p class="disc">
                                    We specialize in post-construction services, offering complete solutions that refine and enhance every project to the highest standards.

                                </p>
                                <a class="read-more" href="#">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts service artea ends -->


    <!-- why choose us area start -->
    <div class="why-choose-us-area rts-section-gap">
        <div class="container">
            <div class="row g-24">
                <div class="col-lg-6">
                    <div class="title-left-align-five pb--50">
                        <span class="pre">Why Choose Us</span>
                        <h2 class="title">Partner in Excellence</h2>
                    </div>
                    <div class="accordion-area-five">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Unmatched Expertise
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        With years of experience in the industry, we bring a wealth of knowledge and skill to every project, ensuring top-tier results.
                                        <a class="more" href="#"> <img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Client-Centered Approach
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        We prioritize your vision and goals, working closely with you to create customized solutions that reflect your unique needs and preferences.
                                        <a class="more" href="#"> <img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        End-to-End Service
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        From initial design to final touches, we offer comprehensive services that cover every aspect of your project, ensuring seamless execution and satisfaction.
                                        <a class="more" href="#"> <img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="thumbnail-why-choose-5">
                        <div class="reveal-item overflow-hidden aos-init">
                            <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end">
                            </div>
                            <img style="min-height:596px; object-fit:cover" src="{{asset('theme/assets/images/service/pexels-rescriptt-rescriptt-101153900-18162495.jpg')}}" alt="thumbnail">
                        </div>
                        <div class="why-choose-option-five">
                            <div class="single">
                                <i class="fa-regular fa-check"></i>
                                <p>Robust Safety Standards and Site Protection</p>
                            </div>
                            <div class="single">
                                <i class="fa-regular fa-check"></i>
                                <p>Modern Equipment and Construction Techniques</p>
                            </div>
                            <div class="single">
                                <i class="fa-regular fa-check"></i>
                                <p>Clear Communication and Timely Project Updates</p>
                            </div>
                            <div class="single">
                                <i class="fa-regular fa-check"></i>
                                <p>Efficient Project Management and Quality Control</p>
                            </div>
                            <div class="single">
                                <i class="fa-regular fa-check"></i>
                                <p>Cost-Effective Solutions with Superior Value</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- why choose us area end -->


    <!-- compoany experties area start -->
    <div class="company-experties-area rts-section-gap bg_image bg-dark-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-style-five mb--35">
                        <div class="title-left-align-five">
                            {{-- <span class="pre">About our company</span> --}}
                            <h2 class="title">What Makes us Great</h2>
                        </div>
                        <a href="appoinment.html" class="rts-btn btn-primary">Make an Appointment</a>
                    </div>
                </div>
            </div>
            <div class="row mt--60">
                <div class="col-lg-12">
                    <div class="funfacts-list-wrapper-5">
                        <div class="single-fun-facts-area-5">
                            <div class="icon">
                                <img src="{{asset('theme/assets/images/facts/icon/06.svg')}}" alt="service">
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="counter title"><span class="odometer" data-count="9">00</span>+
                                </h2>
                                <span class="bottom">Years Of Experience</span>
                            </div>
                        </div>
                        <div class="single-fun-facts-area-5 justify-content-center">
                            <div class="icon">
                                <img src="{{asset('theme/assets/images/facts/icon/07.svg')}}" alt="service">
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="counter title"><span class="odometer" data-count="16">00</span>+
                                </h2>
                                <span class="bottom">Expert Members</span>
                            </div>
                        </div>
                        <div class="single-fun-facts-area-5 justify-content-center">
                            <div class="icon">
                                <img src="{{asset('theme/assets/images/facts/icon/06.svg')}}" alt="service">
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="counter title"><span class="odometer" data-count="18">00</span>+
                                </h2>
                                <span class="bottom">Modern Equipment</span>
                            </div>
                        </div>
                        <div class="single-fun-facts-area-5 justify-content-end justify-content-md-center justify-content-sm-center">
                            <div class="icon">
                                <img src="{{asset('theme/assets/images/facts/icon/02.svg')}}" alt="service">
                            </div>
                            <div class="counter-wrapper">
                                <h2 class="counter title"><span class="odometer" data-count="8">00</span>+
                                </h2>
                                <span class="bottom"> Completed Projects</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- compoany experties area end -->

    <!-- rts portfolio area start -->
    <div class="rts-portfolio-area-case rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-style-five mb--35">
                        <div class="title-left-align-five">
                            <span class="pre">Our Works</span>
                            <h2 class="title">Explore Projects</h2>
                        </div>
                        <div class="button-net-prev-area">

                            <div class="swiper-button-prev"><i class="fa-sharp-duotone fa-light fa-arrow-left"></i>
                            </div>
                            <div class="swiper-button-next"><i class="fa-sharp-duotone fa-light fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-full">
            <div class="row">
                <div class="col-lg-12">
                    <div class="swiper-recent-project-5-wrapper">
                        <div class="swiper mySwiper-case-5" dir="ltr">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-case-studies-5">
                                        <a href="#">
                                            <img style="max-height:519px; object-fit:cover; width:100%;" src="{{asset('uploads/Kiemas.jpg')}}" alt="">
                                        </a>
                                        <svg width="698" height="505" viewbox="0 0 698 505" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="698" height="505" rx="10" fill="black" fill-opacity="0.61"></rect>
                                            <g style="mix-blend-mode:overlay">
                                                <rect width="698" height="505" rx="10" fill="url(#paint0_linear_6350_24)"></rect>
                                            </g>
                                            <defs>
                                                <lineargradient id="paint0_linear_6350_24" x1="563" y1="-9.61239e-06" x2="63" y2="505" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#F84E1D" offset="1"></stop>
                                                    <stop offset="1" stop-color="#922E11" stop-opacity="0"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg>
                                        <div class="inner">
                                            <div class="active-text-area">
                                                <h1 class="title">Kiema's Resident</h1>
                                                <p class="disc">
                                                    This 3-bedroom villa features all ensuite bedrooms, a spacious living room, dining area, modern kitchen, laundry room, and a garage. The property also includes a beautiful landscape, with a balcony and terrace offering stunning views.

                                                </p>
                                                <ul class="feature">
                                                    <li>
                                                        <p>Client:</p> Private Ownser
                                                    </li>
                                                    <li>
                                                        <p>Location:</p> Gikambura, Kikuyu, Kiambu County
                                                    </li>
                                                    <li>
                                                        <p>Project Duration:</p> Estimated 18 months (Sep 2023 – Jan
                                                        2025)
                                                    </li>
                                                    <li>
                                                        <p>Project Cost(aprx):</p> 18 Million
                                                    </li>

                                                </ul>
                                                <a target="new" href="{{asset('uploads/Kiemas.jpg')}}" class="rts-btn btn-primary">View
                                                    Image<img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow"></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="single-case-studies-5">
                                        <a href="project-details.html">
                                            <img style="max-height:519px; object-fit:cover; width:100%;" src="{{asset('uploads/labans.jpg')}}" alt="">
                                        </a>
                                        <svg width="698" height="505" viewbox="0 0 698 505" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="698" height="505" rx="10" fill="black" fill-opacity="0.61"></rect>
                                            <g style="mix-blend-mode:overlay">
                                                <rect width="698" height="505" rx="10" fill="url(#paint0_linear_6350_23)"></rect>
                                            </g>
                                            <defs>
                                                <lineargradient id="paint0_linear_6350_23" x1="563" y1="-9.61239e-06" x2="63" y2="505" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#F84E1D" offset="1"></stop>
                                                    <stop offset="1" stop-color="#922E11" stop-opacity="0"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg>
                                        <div class="inner">
                                            <div class="active-text-area">
                                                <h1 class="title">Estate Villa</h1>
                                                <p class="disc">
                                                    This 2-bedroom residence includes all ensuite bedrooms, a spacious living area, modern kitchen, and a dedicated office space. The property also features a laundry room, ample parking, and a well-designed outdoor area.

                                                </p>
                                                <ul class="feature">
                                                    <li>
                                                        <p>Client:</p> Private Owner
                                                    </li>
                                                    <li>
                                                        <p>Location:</p> Ruiru, Kiambu County
                                                    </li>
                                                    <li>
                                                        <p>Project Duration:</p> Estimated 22 months (Completed: October 2023)
                                                    </li>
                                                    <li>
                                                        <p>Project Cost(aprx)</p> 20.5 Million
                                                    </li>

                                                </ul>
                                                <a href="{{asset('uploads/labans.jpg')}}" class="rts-btn btn-primary">View
                                                    Details<img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="single-case-studies-5">
                                        <a href="project-details.html">
                                            <img style="max-height:519px; object-fit:cover; width:100%;" src="{{asset('uploads/swimingpool.jpg')}}" alt="">
                                        </a>
                                        <svg width="698" height="505" viewbox="0 0 698 505" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="698" height="505" rx="10" fill="black" fill-opacity="0.61"></rect>
                                            <g style="mix-blend-mode:overlay">
                                                <rect width="698" height="505" rx="10" fill="url(#paint0_linear_6350_23)"></rect>
                                            </g>
                                            <defs>
                                                <lineargradient id="paint0_linear_6350_23" x1="563" y1="-9.61239e-06" x2="63" y2="505" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#F84E1D" offset="1"></stop>
                                                    <stop offset="1" stop-color="#922E11" stop-opacity="0"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg>
                                        <div class="inner">
                                            <div class="active-text-area">
                                                <h1 class="title">Backyard Private Swimming Pool</h1>
                                                <p class="disc">
                                                    The backyard features a spacious swimming pool designed for both relaxation and fun, complemented by a separate, solar-heated kids’ pool. The setup ensures year-round comfort while promoting energy efficiency, making it perfect for family-friendly outdoor living.

                                                </p>
                                                <ul class="feature">
                                                    <li>
                                                        <p>Client:</p> Private Owner
                                                    </li>
                                                    <li>
                                                        <p>Location:</p> Malindi, Kenyan Coast
                                                    </li>
                                                    <li>
                                                        <p>Project Duration:</p> Estimated 10 months (Completed: May 2022)
                                                    </li>
                                                    <li>
                                                        <p>Project Cost(aprx)</p> 15.5 Million
                                                    </li>

                                                </ul>
                                                <a href="{{asset('uploads/swimingpool.jpg')}}" class="rts-btn btn-primary">View
                                                    Details<img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide">
                                    <div class="single-case-studies-5">
                                        <a href="#">
                                            <img style="max-height:519px; object-fit:cover; width:100%;" src="{{asset('uploads/Kiemas.jpg')}}" alt="">
                                        </a>
                                        <svg width="698" height="505" viewbox="0 0 698 505" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="698" height="505" rx="10" fill="black" fill-opacity="0.61"></rect>
                                            <g style="mix-blend-mode:overlay">
                                                <rect width="698" height="505" rx="10" fill="url(#paint0_linear_6350_24)"></rect>
                                            </g>
                                            <defs>
                                                <lineargradient id="paint0_linear_6350_24" x1="563" y1="-9.61239e-06" x2="63" y2="505" gradientunits="userSpaceOnUse">
                                                    <stop stop-color="#F84E1D" offset="1"></stop>
                                                    <stop offset="1" stop-color="#922E11" stop-opacity="0"></stop>
                                                </lineargradient>
                                            </defs>
                                        </svg>
                                        <div class="inner">
                                            <div class="active-text-area">
                                                <h1 class="title">Kiema's Resident</h1>
                                                <p class="disc">
                                                    This 3-bedroom villa features all ensuite bedrooms, a spacious living room, dining area, modern kitchen, laundry room, and a garage. The property also includes a beautiful landscape, with a balcony and terrace offering stunning views.

                                                </p>
                                                <ul class="feature">
                                                    <li>
                                                        <p>Client:</p> Private Ownser
                                                    </li>
                                                    <li>
                                                        <p>Location:</p> Gikambura, Kikuyu, Kiambu County
                                                    </li>
                                                    <li>
                                                        <p>Project Duration:</p> Estimated 18 months (Sep 2023 – Jan
                                                        2025)
                                                    </li>
                                                    <li>
                                                        <p>Project Cost(aprx):</p> 18 Million
                                                    </li>

                                                </ul>
                                                <a target="new" href="{{asset('uploads/Kiemas.jpg')}}" class="rts-btn btn-primary">View
                                                    Image<img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="arrow"></a>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts portfolio area end -->



    <!-- rts latest blog area start -->
    <div class="rts-latest-blog-area rts-section-gap rts-portfolio-area-case bg-white-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-between-style-five mb--35">
                        <div class="title-left-align-five">
                            {{-- <span class="pre">Service we provide</span> --}}
                            <h2 class="title">News & Updates</h2>
                        </div>
                        <a href="{{route('news-updates')}}" class="rts-btn btn-primary">View All Posts
                            <img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="row g-24">
                <?php $Blogs = DB::table('blogs')->limit('3')->orderBy('id','ASC')->get(); ?>
                @foreach ($Blogs as $blog)
                   @if($blog->main == "1")
                    <div class="col-lg-12">
                        <div class="single-blog-card-style-5">
                            <div class="top-area-blog">
                                <span>Through a unique combination of engineering, and construction</span>
                                <a href="{{url('/')}}/news-updates/{{$blog->slung}}" class="thumbnail">
                                    <img src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="{{$blog->title}}">
                                </a>
                            </div>
                            <div class="inner-content-area">
                                <div class="author-area">
                                    {{-- <img src="{{asset('theme/assets/images/blog/18.webp')}}" alt=""> --}}
                                    <div class="info">
                                        <p>by</p>
                                        <h5 class="name">ERP Team</h5>
                                    </div>
                                </div>
                                <div class="title-content-area">
                                    <div class="tag-area">
                                        <span>{{date('d M, Y', strtotime($blog->created_at))}}</span>
                                        <span class="intro">Construction & Engineering</span>
                                    </div>
                                    <a href="{{url('/')}}/news-updates/{{$blog->slung}}">
                                        <h3 class="title">
                                            {{$blog->title}}
                                        </h3>
                                    </a>
                                    <a href="{{url('/')}}/news-updates/{{$blog->slung}}" class="read-more">Read Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                   @else
                    <div class="col-lg-6">
                            <div class="single-blog-card-style-5 small-blog-five">
                                <div class="top-area-blog">
                                    <span>Through a unique combination of engineering, and construction</span>
                                    <a href="{{url('/')}}/news-updates/{{$blog->slung}}" class="thumbnail">
                                        <img style="max-height:424px; width:100%; object-fit:cover" src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="blog-image">
                                    </a>
                                </div>
                                <div class="inner-content-area">
                                    <div class="author-area">
                                        {{-- <img src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="{{$blog->title}}"> --}}
                                        <div class="info">
                                            <p>by</p>
                                            <h5 class="name">ERP Team</h5>
                                        </div>
                                    </div>
                                    <div class="title-content-area">
                                        <div class="tag-area">
                                            <span>{{date('d M, Y', strtotime($blog->created_at))}}</span>
                                            <span class="intro">Construction & Engineering</span>
                                        </div>
                                        <a href="{{url('/')}}/news-updates/{{$blog->slung}}">
                                            <h3 class="title">
                                                {{$blog->title}}
                                            </h3>
                                        </a>
                                        <a href="{{url('/')}}/news-updates/{{$blog->slung}}" class="read-more">Read Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                   @endif

                @endforeach

                {{-- <div class="col-lg-6">
                    <div class="single-blog-card-style-5 small-blog-five">
                        <div class="top-area-blog">
                            <span>Through a unique combination of engineering, and construction</span>
                            <a href="{{url('/')}}/news-updates/{{$blog->slung}}" class="thumbnail">
                                <img src="{{asset('theme/assets/images/blog/16.webp')}}" alt="blog-image">
                            </a>
                        </div>
                        <div class="inner-content-area">
                            <div class="author-area">
                                <img src="{{asset('theme/assets/images/blog/18.webp')}}" alt="">
                                <div class="info">
                                    <p>by</p>
                                    <h5 class="name">ERP Team</h5>
                                </div>
                            </div>
                            <div class="title-content-area">
                                <div class="tag-area">
                                    <span>18 December, 2024</span>
                                    <span class="intro">Interior Design</span>
                                </div>
                                <a href="{{url('/')}}/news-updates/{{$blog->slung}}">
                                    <h3 class="title">
                                        Liquid delivers excellent design perspective
                                        Through a unique combination
                                    </h3>
                                </a>
                                <a href="{{url('/')}}/news-updates/{{$blog->slung}}" class="read-more">Read Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="single-blog-card-style-5 small-blog-five">
                        <div class="top-area-blog">
                            <span>Through a unique combination of engineering, and construction</span>
                            <a href="{{url('/')}}/news-updates/{{$blog->slung}}" class="thumbnail">
                                <img src="{{asset('theme/assets/images/blog/17.webp')}}" alt="blog-image">
                            </a>
                        </div>
                        <div class="inner-content-area">
                            <div class="author-area">
                                <img src="{{asset('theme/assets/images/blog/18.webp')}}" alt="">
                                <div class="info">
                                    <p>by</p>
                                    <h5 class="name">ERP Team</h5>
                                </div>
                            </div>
                            <div class="title-content-area">
                                <div class="tag-area">
                                    <span>18 December, 2024</span>
                                    <span class="intro">Interior Design</span>
                                </div>
                                <a href="{{url('/')}}/news-updates/{{$blog->slung}}">
                                    <h3 class="title">
                                        How to Use Lighting to Create Mood, Style, and
                                        Function in Any Room
                                    </h3>
                                </a>
                                <a href="{{url('/')}}/news-updates/{{$blog->slung}}" class="read-more">Read Details</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- rts latest blog area end -->



    <!-- about us area start -->
    <div class="about-us-area-five rts-section-gapBottom rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-wrapper-area-five">
                        <div class="about-left-wrapper">
                            <span class="pre">Our Commitment To Community</span>
                            <h2 class="title">We're focused on achieving your <br>
                                project vision and business</h2>
                            <p class="disc">
                                We are committed to bringing your project vision to life while aligning with your business goals. By understanding your needs and working closely with you, we ensure that every solution drives your success and exceeds expectations. Your vision is our priority, and we deliver results that make a real impact.

                            </p>
                            <a href="{{route('who-we-are')}}" class="rts-btn btn-primary">More About Us
                                <img src="{{asset('theme/assets/images/icons/arrow-up-right.svg')}}" alt="">
                            </a>
                        </div>
                        <div class="right-thumbnail">
                            <img style="min-height:448px; object-fit:cover" src="{{asset('uploads/pexels-mcgzay-30661412.jpg')}}" alt="about">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us area end -->
@endsection
