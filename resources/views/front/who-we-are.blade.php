@extends('front.master-pages')

@section('content')
 <!-- rts banner area strart -->
 <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="breadcrumb-area-inner">
                <span class="water-text">About</span>
                <h1 class="title">
                   Dedicated to Building Dreams & Crafting Tomorrow’s Skyline with Unmatched Precision
                </h1>
                <div class="nav-area-navigation">
                   <a href="#">home</a>
                   <a class="current" href="#">About Us</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- rts banner area end -->
 <!-- about us area start -->
 <div class="about-us-area-five rts-section-gap">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="about-wrapper-area-five">
                <div class="about-left-wrapper">
                   <span class="pre">Our Commitment To Our Clients</span>
                   <h2 class="title">About Us</h2>
                   <p class="disc">
                     <!--  -->
                      Beniscope East Africa Limited is a leading consultancy and project management firm providing innovative and sustainable construction solutions across East Africa. Our experienced team guides clients through all project stages, from planning to completion, ensuring quality, efficiency, and integrity tailored to their needs and the local environment. We prioritize strong partnerships and clear communication, offering personalized services and leveraging technology to deliver timely, cost-effective results in commercial, residential, and infrastructure projects. Our vision is to be East Africa's trusted construction consultancy leader, empowering communities through expertly managed projects.
                     <!--  -->
                   </p>
                   <a href="#" class="rts-btn btn-primary">What We Do
                   <img src="{{asset('assets/images/icons/arrow-up-right.svg')}}" alt="">
                   </a>
                </div>
                <div class="right-thumbnail">
                   <img src="{{asset('uploads/about-portrait.jpeg')}}" alt="about">
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- about us area end -->

 
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
 <!-- large vbdeo area start -->
 <div class="large-video-area rts-section-gap">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="title-style-two-center inner">
                <span class="pre">Portfolio</span>
                <h2 class="title">From Blueprint to Reality
                </h2>
             </div>
          </div>
       </div>
       <div class="row pt--60">
          <div class="col-lg-12">
             <div class="large-video-area-inner bg_image gradient-border">
                <div class="vedio-icone">
                   <!-- <a class="video-play-button play-video" href="#">
                   <span></span>
                   </a> -->
                   <div class="video-overlay">
                      <a class="video-overlay-close">×</a>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- large vbdeo area end -->
 <!-- why choose us area start -->
 <div class="why-choose-us-area rts-section-gap in-about-page">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-xl-6 col-lg-12 pr--60 pr_md--0 pr_sm--0">
             <div class="reveal-item overflow-hidden aos-init">
                <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end">
                </div>
                <img src="{{asset('theme/assets/images/service/service.jpg')}}" alt="journey-area">
             </div>
          </div>
          <div class="col-xl-6 col-lg-12 pt_md--30 pt_sm--50">
             <div class="how-we-works-wrappers">
                <div class="title-wrapper-left mb--50">
                   <span class="pre">How We Works</span>
                   <h2 class="title">
                        Our Process
                   </h2>
                </div>
                <div class="single-choose-us-one">
                   <div class="icon">
                      <img src="{{asset('theme/assets/images/service/07.svg')}}" alt="service">
                      <span>1</span>
                   </div>
                   <div class="info-wrapper">
                      <h5 class="title"> Project Brief & Site Evaluation</h5>
                      <p class="disc">
                        We begin with an in-depth consultation to understand your project goals, budget, and timeline. Our team conducts a thorough site visit and feasibility assessment to capture key requirements and identify potential challenges early.
                      </p>
                   </div>
                </div>
                <div class="single-choose-us-one">
                   <div class="icon">
                      <img src="{{asset('theme/assets/images/service/08.svg')}}" alt="service">
                      <span>2</span>
                   </div>
                   <div class="info-wrapper">
                      <h5 class="title">Planning, Design & Approvals</h5>
                      <p class="disc">
                        Once the brief is finalized, we develop detailed architectural and structural plans. We also assist in securing all necessary regulatory approvals and permits. A comprehensive project roadmap is shared, outlining milestones, timelines, and cost estimates.
                      </p>
                   </div>
                </div>
                <div class="single-choose-us-one">
                   <div class="icon">
                      <img src="{{asset('theme/assets/images/service/09.svg')}}" alt="service">
                      <span>3</span>
                   </div>
                   <div class="info-wrapper">
                      <h5 class="title">Execution, Supervision & Handover</h5>
                      <p class="disc">
                        Our expert team manages the entire construction process—coordinating contractors, monitoring progress, and ensuring quality standards. We provide regular updates and conduct inspections until final handover, guaranteeing a seamless, professional delivery.
                      </p>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- why choose us area end -->
 <!-- rts blog area start -->
 <div class="rts-blog-area rts-section-gap">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="title-style-two-center">
                <h2 class="title">News & Updates</h2>

             </div>
          </div>
       </div>
       <div class="row g-24 mt--40">
          <?php $Blog = DB::table('blogs')->orderBy('id','DESC')->limit('3')->get(); ?>
          @foreach ($Blog as $blog)
          <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="single-blog-three">
               <a href="blog-details.html" class="thumbnail">
                <img style="height:300px; width:100%; object-fit:cover" src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt="{{$blog->title}}">
               </a>
               <div class="inner-content-area">
                  <div class="top-area">
                     <div class="tag">
                        <i class="fa-regular fa-tag"></i>
                        <span>Solutions</span>
                     </div>
                  </div>
                  <a href="{{url('/')}}/news-updates/{{$blog->slung}}">
                     <h3 class="title">
                        {{$blog->title}}
                     </h3>
                  </a>
                  <div class="bottom-area">
                     <div class="left">
                        {{-- <img src="assets/images/blog/10.webp" alt="blog"> --}}
                        <div class="info">
                           <h5 class="title">Erp Team</h5>
                           <span>Author</span>
                        </div>
                     </div>
                     <a href="{{url('/')}}/news-updates/{{$blog->slung}}" class="rts-btn btn-primary">Read Details</a>
                  </div>
               </div>
            </div>
         </div>
          @endforeach
       </div>
    </div>
 </div>
 <!-- rts blog area end -->

@endsection
