@extends('front.master-pages')

@section('content')

    
    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area-inner">
                    <span class="water-text">Portfolio</span>
                    <h1 class="title">
                    {{$Projects->title}}
                    </h1>
                    <div class="nav-area-navigation">
                        <a href="#">home</a>
                        <a class="current" href="#">Portfolio</a>
                        <a class="current" href="#">{{$Projects->title}}</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- rts banner area end -->


<!-- project details area top -->
    <div class="project-details-wrapper-image-top rts-section-gap">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="thumbnail">
                        <img style="height:600px; width:100%; object-fit:cover;" src="{{asset('uploads/')}}/{{$Projects->image}}" alt="portfolio">
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt--30">
            <div class="row mb--40">
                <div class="col-lg-12">
                    <div class="single-project-info-wrapper-inner">
                        <h4 class="title">{{$Projects->title}}</h4>
                        <p class="disc">
                            {{$Projects->meta}}
                        </p>
                        <div class="row g-4">
                            <div class="col-lg-2">
                                <div class="single-project-info">
                                    <span>Client:</span>
                                    <p>{{$Projects->title}}</p>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single-project-info">
                                    <span>Location:</span>
                                    <p>{{$Projects->location}}</p>
                                    <br>
                                </div>
                            </div>
                           
                            <div class="col-lg-2">
                                <div class="single-project-info">
                                    <span>Project Year:</span>
                                    <p>{{$Projects->year}}</p><br>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="single-project-info">
                                    <span>Duration: </span>
                                    <p>{{$Projects->duration}}</p>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="single-project-info">
                                    <span>Price:</span>
                                    <p>{{$Projects->price}}</p><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="project-details-content-bottom">
                        
                        {{-- <p class="bold">
                           {!!html_entity_decode($Projects->description)!!}
                        </p> --}}
                          <p class="bold">
                           {!!html_entity_decode($Projects->content)!!}
                        </p>
                    </div>
                </div>
            </div>
            {{--  --}}
             <?php 
              // Check if there is a previous and next project
              $Previous = DB::table('projects')->where('id', '<', $Projects->id)->orderBy('id', 'desc')->first();
              $Next = DB::table('projects')->where('id', '>', $Projects->id)->orderBy('id', 'asc')->first();
              if($Next == null){
                $Next = DB::table('projects')->orderBy('id', 'asc')->first();
              }
              if($Previous == null){
                $Previous = DB::table('projects')->orderBy('id', 'desc')->first();
              }
            ?>
            <div class="col-lg-12">
                <div class="next-prev-project-wrapper">
                     <div class="single-next-prev-wrapper">
                            <img src="{{asset('uploads/')}}/{{$Previous->image}}" alt="left">
                            <div class="info">
                                <span>Beniscope</span>
                                <p>{{$Previous->title}}</p>
                            </div>
                    </div>
                    <div class="single-next-prev-wrapper last">
                        <div class="info">
                            <span>Beniscope</span>
                            <p>{{$Next->title}}</p>
                        </div>
                        <img src="{{asset('uploads/')}}/{{$Next->image}}" alt="left">
                    </div>
                </div>
            </div>
            {{--  --}}
        </div>
    </div>
    
    <!-- project details area top -->

    {{--  --}}


  
     <div class="rts-call-to-action rts-section-gapBottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="call-to-action-area-service bg_image">
                        <div class="inner">
                            <h3 class="title">Ready to work together</h3>
                            <p class="disc">
                                Whether you have a project in mind and you’re looking for a reliable construction
                                partner or you’re looking to take the next step in your career, we want to hear from
                                you!
                            </p>
                            <a href="#" class="rts-btn btn-primary">Make An Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- why choose us area start -->
    <div class="why-choose-us-area rts-section-gapBottom">
        <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-12 pr--60 pr_md--0 pr_sm--0">
                <div class="reveal-item overflow-hidden aos-init">
                    <div class="reveal-animation reveal-end reveal-primary aos aos-init" data-aos="reveal-end">
                    </div>
                    <img src="{{asset('theme/assets/images/service/service.jpeg')}}" alt="journey-area">
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

@endsection
