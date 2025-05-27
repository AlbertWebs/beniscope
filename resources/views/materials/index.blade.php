@extends('front.master-pages')

@section('content')

    
    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area-inner">
                    <span class="water-text">Construction</span>
                    <h1 class="title">
                    Construction Materials
                    </h1>
                    <div class="nav-area-navigation">
                        <a href="#">home</a>
                        <a class="current" href="#">Construction</a>
                        <a class="current" href="#">Construction Materials</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- rts banner area end -->


    <div class="rts-blog-grid-area rts-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-12 pr--25">
                    
                    <div class="row g-24">
                        @foreach ($materials as $material)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <!-- single blog two -->
                            <div class="product-single-two-wrapper shop">
                                <div class="image-area">
                                    <a href="{{route('construction-material-product', $material->slug)}}" class="thumbnail">
                                        <img style="width:328px; height:328px; object-fit:cover;" src="{{ $material->image }}" alt="{{ $material->title }}">
                                    </a>
                                </div>
                                <div class="inner">
                                    <span class="pre-tag">
                                        KES {{ number_format($material->price, 2) }}
                                    </span>
                                    <a href="{{route('construction-material-product', $material->slug)}}">
                                        <h5 class="title">{{ $material->title }}</h5>
                                    </a>
                                    <a href="https://wa.me/25445717709?text=Hello, I need a quotation for {{ $material->title }}, Listed on your website" class="btn-read-more-blog"> Request Quotation <i class="fa-regular fa-pencil"></i></a>
                                </div>
                            </div>
                            <!-- single blog two end -->
                        </div>
                        @endforeach
                
                    </div>
                </div>
              
            </div>
          
        </div>
    </div>




@endsection
