@extends('materials.master')

@section('content')

    
    <!-- rts banner area strart -->
    <div class="rts-banner-area rts-section-gap rts-breadcrumb-area  position-relative contact-bd">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-area-inner">
                    <span class="water-text">Construction</span>
                    <h1 class="title">
                    {{$title}}
                    </h1>
                    <div class="nav-area-navigation">
                        <a href="#">home</a>
                        <a href="#">Construction</a>
                        <a href="#">Construction Materials</a>
                        <a class="current" href="#">{{$title}}</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- rts banner area end -->


    <main class="ms-main rts-section-gapTop">
        <div class="container">
            <div id="primary" class="content-area single-product" dir="ltr">
                <div class="site-main">
                    <div class="woocommerce-notices-wrapper"></div>
                    <div id="product-470" class="ms-single-product product type-product post-470 status-publish first instock product_cat-run product_tag-life product_tag-move product_tag-sport product_tag-trainers has-post-thumbnail shipping-taxable purchasable product-type-simple">
                        <div class="row align-items-center">
                            <div class="col-md-5 offset-lg-1">
                                <div class="product-single-main-wrapper-single-left">
                                    <div class="banner-horizental">
                                        <div class="swiper swiper-container-h12 mb--30">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="slider-inner">
                                                        <img src="{{ $materials->image }}" alt="full_screen-image">
                                                    </div>
                                                </div>

                                                
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-5">
                                <div class="ms-single-product__content" data-sal="slide-up" data-sal-delay="350" data-sal-duration="900">
                                    <h2 class="ms-single-product_title">{{$materials->title}}</h2>
                                    <p class="price">
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi><span class="woocommerce-Price-currencySymbol">Kes</span>{{ number_format($materials->price, 2) }}</bdi>
                                        </span>
                                    </p>
                                    <div class="ms-woocommerce-product-rating woocommerce-product-rating">
                                        <div class="ms-rating-icon">
                                            <svg height="26px" version="1.2" viewbox="3 2 22 22" width="26px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <g>
                                                    <g>
                                                        <path d="M9.362,9.158c0,0-3.16,0.35-5.268,0.584c-0.19,0.023-0.358,0.15-0.421,0.343s0,0.394,0.14,0.521    c1.566,1.429,3.919,3.569,3.919,3.569c-0.002,0-0.646,3.113-1.074,5.19c-0.036,0.188,0.032,0.387,0.196,0.506    c0.163,0.119,0.373,0.121,0.538,0.028c1.844-1.048,4.606-2.624,4.606-2.624s2.763,1.576,4.604,2.625    c0.168,0.092,0.378,0.09,0.541-0.029c0.164-0.119,0.232-0.318,0.195-0.505c-0.428-2.078-1.071-5.191-1.071-5.191    s2.353-2.14,3.919-3.566c0.14-0.131,0.202-0.332,0.14-0.524s-0.23-0.319-0.42-0.341c-2.108-0.236-5.269-0.586-5.269-0.586    s-1.31-2.898-2.183-4.83c-0.082-0.173-0.254-0.294-0.456-0.294s-0.375,0.122-0.453,0.294C10.671,6.26,9.362,9.158,9.362,9.158z">
                                                        </path>
                                                    </g>
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="ms-rating-average"> 5.00 </div>
                                        <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                                    </div>
                                    <div class="woocommerce-product-details__short-description">
                                      
                                        <p>
                                            {!!html_entity_decode($materials->description)!!}
                                        </p>
                                    </div>
                                    <p class="stock in-stock">In stock</p>
                                    <div class="quantity-area">

                                        <a href="https://wa.me/25445717709?text=Hello, I need a quotation for {{ $materials->title }}, Listed on your website" class="rts-btn btn-primary">Request Quotation <i class="fa-brands fa-whatsapp" aria-hidden="true"></i> </a>
                                    </div>
                                    <div class="product_meta">
                                        <span class="sku_wrapper"><strong>SKU:</strong> <span class="sku">16105{{$materials->id}}</span></span>
                                        
                                    </div>
                                    <br><br><br>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

   
   


@endsection
