@extends('front.master-pages')

@section('content')

      <!-- rts banner area strart -->
      <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 <div class="breadcrumb-area-inner">
                    <span class="water-text">Contact</span>
                    <h1 class="title">
                       Contact Us
                    </h1>
                    <div class="nav-area-navigation">
                       <a href="#">home</a>
                       <a class="current" href="#">Contact Us</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- rts banner area end -->
     <!-- rta contact area stsart -->
     <div class="rts-contact-area-page rts-section-gap">
        <div class="container">
           <div class="row align-items-center">
              <div class="col-lg-6 pr--60 pr_sm--0 mb_sm--30 pr_md--10 pb_md--25 pb_sm--25">
                 <div class="contact-main-wrapper-left">
                    <span>Get In Touch</span>
                    <h3 class="title-main">
                       We are always ready to help you <br> and answer your questions
                    </h3>
                    <p class="disc">
                       Pacific hake false trevally queen parrotfish black prickleback mosshead warbonnet sweeper!
                       Greenling sleeper.
                    </p>
                    <div class="row g-24">
                       <div class="col-lg-6">
                          <div class="quick-contact-page-1">
                             <div class="icon">
                                <img src="{{asset('theme/assets/images/contact/01.svg')}}" alt="contact">
                             </div>
                             <h5 class="title">Call Center</h5>
                             <p>
                                <a href="#">support@beniscope.com</a>
                                <a href="#">info@beniscope.com</a>
                             </p>
                          </div>
                       </div>
                       <div class="col-lg-6">
                          <div class="quick-contact-page-1">
                             <div class="icon">
                                <img src="{{asset('theme/assets/images/contact/02.svg')}}" alt="contact">
                             </div>
                             <h5 class="title">Our Office</h5>
                             <p>
                                Prestige Plaza, Ngong Road, Kilimani <br>
                   Nairobi Kenya
                             </p>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div id="form-messages"></div>
                 <form id="contact-form" action="mailer.php" class="contact-form-area-wrapper">
                    <h4 class="title">Let’s Get in Touch</h4>
                    <div class="half-inpur-wrapper">
                       <div class="single">
                          <input type="text" name="name" placeholder="Your Name">
                       </div>
                       <div class="single">
                          <input type="text" name="email" placeholder="number" required="">
                       </div>
                    </div>
                    <div class="single">
                       <input name="subject" type="text" placeholder="Email Address...">
                    </div>
                    <textarea name="message" id="" placeholder="Type Your Message"></textarea>
                    <button type="submit" class="rts-btn btn-primary">Send Message</button>
                 </form>
              </div>
           </div>
        </div>
     </div>
     <!-- rta contact area end -->
     <div class="rts-map-area rts-section-gapBottom">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 <div class="rts-map-main-wrapper">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.788787624957!2d36.78464359999999!3d-1.3016387999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f11005997074f%3A0x20b47583edbd55d1!2sBeniscope%20East%20Africa%20Limited!5e0!3m2!1sen!2ske!4v1747399250943!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                 </div>
              </div>
           </div>
        </div>
     </div>

@endsection
