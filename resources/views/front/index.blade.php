@extends('front.master')

@section('content')

<!-- hero-wapper-section -->
<section class="vs-hero-wrapper4">
    <div class="banner-slide4">
        <div class="banner-slide4-content">
            <div class="container-style4">
                <div class="banner-content4">

                    <h1 class="banner-title">We are your Plugs for <span>Baby & Adult Diapers</span></h1>
                    <p style='stroke:#000; stroke-width:0px; text-align:center; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; background-position:0% 0%; background-repeat:no-repeat; background-clip:border-box; overflow:visible; color:#490D59; font-family:"Fredoka", sans-serif; top:418px; left:362px; z-index:200; -webkit-background-clip:border-box;' class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-50; delayin:300; easingin:easeOutQuint; rotatein:-8; offsetxout:-50; rotateout:-8; rotation:-8;">
                        Find reliable, comfortable adult diapers at great prices. Enjoy discreet delivery and top-notch customer service. Shop with us for convenience and peace of mind.
                    </p>
                    <a href="#" title="" class="vs-btn banner">Order Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End hero-wapper -->

<!-- service-style3 -->
<section class="service-details space">
    <div class="container-style4">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-card3">
                    <h4 class="title"><a href="service-details.html" title="">Handpicked Quality <br> and Comfort</a></h4>
                    <span>
                        Nairobi Diapers carefully selects the highest quality diapers from trusted manufacturers to ensure your baby enjoys the ultimate comfort and superior absorbency.
                        Each diaper is rigorously tested to meet our strict standards, providing your baby with the best care possible.
                    </span>
                    <a href="#" class="ser-btn3"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-card3 v2">
                    <h4 class="title"><a href="service-details.html" title="">Safe and secure<br> environments</a></h4>
                    <span>
                        Nairobi Diapers is committed to creating safe and secure environments for your baby. Our diapers undergo thorough quality control measures to ensure they meet safety standards, giving you peace of mind knowing your little one is protected while wearing Nairobi Diapers.
                    </span>
                    <a href="#" class="ser-btn3"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="service-card3 v3">
                    <h4 class="title"><a href="service-details.html" title="">Curated for <br> Your Convenience</a></h4>
                    <span>
                        Nairobi Diapers offers a curated selection of premium diaper brands, making it easy for parents to find the perfect fit for their babies. With our focus on convenience and reliability, you can trust Nairobi Diapers to deliver top-notch products right to your doorstep, ensuring your baby stays happy and dry.
                    </span>
                    <a href="#" class="ser-btn3"><i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End service-section3 -->

<!-- about-section-four -->
<section class="about-section-four">
    <div class="container-style4">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="about-img-four">
                    <img src="{{asset('theme/assets/img/bg/junior-diapers-new-package.png')}}" alt="">
                    {{-- <img src="{{url('/')}}/uploads/huggies.jpg" alt=""> --}}

                    <div class="exp-box-four bounce-y">
                        <h4 class="title">100%</h4>
                        <span>A+ Results</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="about-content4">
                    <span class="sub-title">We have been here Since 2015,</span>

                    <p>
                        Explore Nairobi Diapers' curated selection of premium baby diapers, sourced from trusted manufacturers for unbeatable quality and performance.<br>
                        While we don't manufacture our own diapers, we meticulously choose brands known for their superior comfort and reliability.<br><br>
                        Our carefully chosen range ensures maximum protection against leaks and discomfort, thanks to advanced absorbent materials and tailored fits.<br><br>
                        Designed with your confidence and dignity in mind, Nairobi Diapers offer innovative features such as discreet packaging and odor control technology, providing a seamless solution for managing incontinence or mobility challenges with ease and assurance.
                    </p>
                    {{-- <div class="about-shedule">
                        <h4 class="title">Opening Hours</h4>
                        <ul class="about-list4">
                            <li>Monday to Saturday:<span>8:00am to 12.00pm</span></li>
                            <li>Sunday:   Closed</li>
                            <li>Annual Festival:<span>8:00am to 12.00pm</span></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End about-section -->

<section class="vs-product-wrapper space-top space-extra-bottom main-section space" data-bg-src="{{asset('theme/assets/img/bg/main1-1.jpg')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title-area-four blog5 text-center">
                <h2>Our Picks</h2>
            </div>
            @foreach ($Products as $product)
            <?php
               $Category = \App\Models\Category::find($product->category_id);
            ?>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="vs-product product-style1">
                    <div class="product-img">
                        <a class="products-img" href="{{url('/')}}/products/{{$Category->slung}}/{{$product->slung}}">
                            <img class="product-image" src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Image">
                        </a>
                    </div>
                    <div class="product-content">
                        @if($product->price == $product->price_raw)
                        <span class="product-price">kes {{$product->price}}</span>
                        @else
                        <span class="product-price">kes {{$product->price_raw}} <del>kes {{$product->price}}</del></span>
                        @endif

                        <h3 class="product-title" style="min-height:80px"><a class="text-inherit" href="{{url('/')}}/products/{{$Category->slung}}/{{$product->slung}}">{{$product->title}}</a></h3>

                        <div class="actions">
                            <a href="{{url('/')}}/products/{{$Category->slung}}/{{$product->slung}}" class="vs-btn"><i class="far fa-shopping-cart"></i>Shop Now</a>
                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Wave Shape -->
<section class="wave-shaps-section space">
    <div class="container-style4">
        <div class="row vs-carousel gx-10" data-slide-show="5" data-ml-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="2">
            <div class="col-auto">
                <div class="brand-style1"><img src="{{url('/')}}/uploads/brands/huggies.png" alt="brand"></div>
            </div>
            <div class="col-auto">
                <div class="brand-style1"><img src="{{url('/')}}/uploads/brands/kiss.png" alt="brand"></div>
            </div>
            <div class="col-auto">
                <div class="brand-style1"><img src="{{url('/')}}/uploads/brands/moflix.png" alt="brand"></div>
            </div>
            <div class="col-auto">
                <div class="brand-style1"><img src="{{url('/')}}/uploads/brands/nipnap.png" alt="brand"></div>
            </div>
            <div class="col-auto">
                <div class="brand-style1"><img src="{{url('/')}}/uploads/brands/pampers.png" alt="brand"></div>
            </div>
            <div class="col-auto">
                <div class="brand-style1"><img src="{{url('/')}}/uploads/brands/softcare.png" alt="brand"></div>
            </div>
        </div>
    </div>
</section>
<!-- Wave Shape -->

@endsection
