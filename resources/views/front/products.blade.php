@extends('front.master-products')

@section('content')

<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">{{$title}}</h1>
                {{-- <p class="breadcumb-text">Montessori Is A Nurturing And Holistic Approach To Learning</p> --}}
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>Our Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div><!--==============================
    Product Area
    ==============================-->
    <section class="vs-product-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($Products as $product)
                <?php
                    $Category = \App\Models\Category::find($product->category_id);
                ?>
                <div class="col-md-6 col-lg-3 col-xl-3">
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

                            <h3 class="product-title" style="min-height:80px"><a class="text-inherit" href="{{url('/')}}products/{{$Category->slung}}/{{$product->slung}}">{{$product->title}}</a></h3>

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

@endsection
