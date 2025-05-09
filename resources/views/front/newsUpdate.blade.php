@extends('front.master-pages')

@section('content')


      <!-- rts banner area strart -->
      <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bds" style="background-image: url('{{url('uploads/11.webp')}}');">
        <div class="container">
           <div class="row">
              <div class="col-lg-12">
                 <div class="breadcrumb-area-inner">
                    <span class="water-text">Updates</span>
                    <h1 class="title">
                       {{$Blog->title}}
                    </h1>
                    <div class="nav-area-navigation">
                       <a href="#">home</a>
                       <a href="#">News & Updates</a>
                       <a class="current" href="#">{{$Blog->title}}</a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <!-- rts banner area end -->


     <div class="rts-blog-list-area rts-section-gap">
        <div class="container">
            <div class="row g-5">
                <!-- rts blo post area -->
                <div class="col-xl-10 col-md-12 col-sm-12 col-12" style="margin: 0 auto;">
                    <!-- single post -->
                    <div class="blog-single-post-listing details mb--0">
                        <div class="thumbnail">
                            <img src="{{url('/')}}/uploads/blogs/{{$Blog->image_one}}" alt="Business-Blog">
                        </div>
                        <div class="blog-listing-content">
                            <div class="user-info">
                                <!-- single info -->
                                <div class="single">
                                    <i class="far fa-user-circle"></i>
                                    <span>by ERP Team</span>
                                </div>
                                <!-- single infoe end -->

                            </div>

                            <p class="disc para-1">
                               {!!html_entity_decode($Blog->content)!!}
                            </p>




                        </div>
                    </div>
                    <!-- single post End-->
                </div>
                <!-- rts-blog post end area -->
            </div>
        </div>
    </div>


@endsection
