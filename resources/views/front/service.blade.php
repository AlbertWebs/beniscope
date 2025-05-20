@extends('front.master-pages')

@section('content')

    
    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area-inner">
                    <span class="water-text">Services</span>
                    <h1 class="title">
                    {{$Service->title}} 
                    </h1>
                    <div class="nav-area-navigation">
                    <a href="#">home</a>
                    <a class="current" href="#">{{$Service->title}}</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- service details area start -->
    <div class="service-details-area rts-section-gapTop pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    {{-- <div class="service-details-main-wrapper-thumbnail">
                        <img src="assets/images/service/17.webp" alt="service">
                    </div> --}}
                    <div class="service-details-inner-area-wrapper">
                        
                        <p class="disc">
                            {!!html_entity_decode($Service->content)!!}
                        </p>
                       
                        <div class="service-main-wrapper-tabs">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">What’s Included:</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">No Compromises on Quality</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Customized Solutions</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="inner-wrapper-tab-service-wrapper">
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Comprehensive Project Documentation:</b> Detailed architectural drawings, structural plans, BOQs (Bill of Quantities), and project timelines tailored to your specific construction needs.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>End-to-End Project Supervision:</b> On-site management and regular progress monitoring from groundbreaking to completion, ensuring compliance with standards, timelines, and budgets.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Regulatory & Compliance Support:</b> Assistance with permit applications, regulatory approvals, and adherence to local construction codes and safety standards.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                    <div class="inner-wrapper-tab-service-wrapper">
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Strict Quality Control Measures:</b> Every stage of the project undergoes rigorous inspection and supervision to ensure materials, workmanship, and timelines meet the highest standards.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Certified Professionals & Trusted Suppliers:</b> We work exclusively with qualified engineers, architects, and vetted suppliers to guarantee structural integrity and long-lasting results.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Adherence to Industry Standards & Best Practices:</b> All construction activities follow recognized industry codes, safety regulations, and international best practices to deliver excellence without shortcuts.
                                            </div>
                                        </div>
                                        <p>
                                            Quality isn’t an option—it’s our standard. Every service we offer is executed with precision, professionalism, and attention to detail to deliver durable, high-performance results.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                    <div class="inner-wrapper-tab-service-wrapper">
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Tailored Design & Build Approach:</b> Every project is approached uniquely—our team customizes design, materials, and construction methods to align with your specific vision, space, and functional needs.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Flexible Budget Planning:</b> Whether you’re working with a tight budget or a premium scope, we offer scalable solutions without compromising quality or compliance.
                                            </div>
                                        </div>
                                        <div class="single">
                                            <div class="icon">
                                                <i class="fa-solid fa-check"></i>
                                            </div>
                                            <div class="inner-content">
                                                <b>Client-Centric Project Modifications:</b> We adapt to changing requirements throughout the project lifecycle, ensuring your evolving needs are incorporated seamlessly into the construction process.
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
    <!-- service details area end -->

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
