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
                    Portfolio
                    </h1>
                    <div class="nav-area-navigation">
                    <a href="#">home</a>
                    <a class="current" href="#">Portfolio</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- rts banner area end -->

      <!-- rts projects area start -->
    <div class="rts-projects-area-inner rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <?php $Categories = DB::table('project__categories')->get(); ?>
                        {{--  --}}
                        <?php $Counts = 1; ?>
                        @foreach ($Categories as $categories)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if($Counts == 1) active @endif" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab_{{$categories->id}}" type="button" role="tab" aria-controls="tab_{{$categories->id}}" aria-selected="false">{{$categories->title}}</button>
                        </li>
                        <?php $Counts = $Counts+1 ?>
                        @endforeach
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <?php $Count = 1; ?>
                        @foreach ($Categories as $categories)
                        <div class="tab-pane fade show @if($Count == 1) active @endif" id="tab_{{$categories->id}}" role="tabpanel" aria-labelledby="tab_{{$categories->id}}" tabindex="0">
                            <div class="row g-24">
                                <?php 
                                   $Projects = DB::table('projects')->where('category', $categories->id)->get();    
                                ?>
                                @foreach ($Projects as $project)
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="single-project-card-inner">
                                        <a href="{{asset('uploads/')}}/{{$project->image}}" class="thumbnail">
                                            <img src="{{asset('uploads/')}}/{{$project->image}}" alt="portfolio">
                                        </a>
                                        <div class="inner">
                                            <a href="{{asset('uploads/')}}/{{$project->image}}">
                                                <h5 class="title">{{$project->title}}</h5>
                                            </a>
                                            <span>{{$project->meta}}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                               
                            </div>
                        </div>
                        <?php $Count = $Count+1 ?>
                        @endforeach
                        
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts projects areaend -->


  
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
