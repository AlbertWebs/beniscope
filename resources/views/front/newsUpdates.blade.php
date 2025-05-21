@extends('front.master-pages')

@section('content')
 <!-- rts banner area strart -->
 <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
    <div class="container">
       <div class="row">
          <div class="col-lg-12">
             <div class="breadcrumb-area-inner">
                <span class="water-text">News</span>
                <h1 class="title">
                  News Updates
                </h1>
                <div class="nav-area-navigation">
                   <a href="#">home</a>
                   <a class="current" href="#">News</a>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- rts banner area end -->

 <!-- rts blog area start -->
 <div class="rts-blog-area rts-section-gap">
    <div class="container">
       <div class="row g-24 mt--40">
         
          @foreach ($Blogs as $blog)
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
