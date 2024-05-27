@extends('front.master-product')

@section('content')
@foreach ($Products as $product)

<?php
   $Category = \App\Models\Category::find($product->category_id);
?>
  <!--==============================Breadcumb ============================== -->
  <div class="breadcumb-wrapper " data-bg-src="{{asset('theme/assets/img/breadcumb/breadcumb-bg.jpg')}}">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title" style="text-shadow: 2px 0 0 #fff;">{{$product->title}}</h1>
            <p class="breadcumb-text">Best {{$Category->title}} like {{$product->title}} in Sold by Nairobi Diapers</p>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>{{$product->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</div><!--==============================
Product Details
==============================-->
<section class="vs-product-wrapper product-details space-top space-extra-bottom">
    <div class="container">
        <div class="row gx-60">
            <div class="col-lg-6">
                <div class="product-big-img vs-carousel" data-slide-show="1" data-fade="true" data-asnavfor=".product-thumb-slide">
                    <div class="img"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                    <div class="img"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                    <div class="img"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                    <div class="img"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                    <div class="img"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                </div>
                <div class="product-thumb-slide row vs-carousel" data-slide-show="4" data-md-slide-show="4" data-sm-slide-show="3" data-xs-slide-show="3" data-asnavfor=".product-big-img">
                    <div class="col-3">
                        <div class="thumb"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                    </div>
                    <div class="col-3">
                        <div class="thumb"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                    </div>
                    <div class="col-3">
                        <div class="thumb"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                    </div>
                    <div class="col-3">
                        <div class="thumb"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                    </div>
                    <div class="col-3">
                        <div class="thumb"><img src="{{url('/')}}/uploads/products/{{$product->image}}" alt="Product Image"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="product-about">
                    <p class="product-price">
                        @if($product->price == $product->price_raw)
                        kes {{$product->price_raw}}
                        @else
                        kes {{$product->price_raw}} <del>kes {{$product->price}}</del>
                        @endif
                    </p>
                    <h2 class="product-title">{{$product->title}}</h2>
                    {{-- <div class="product-rating">
                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">5</span> customer rating</span></div> (13)
                    </div> --}}
                    <p class="product-text">We think your skin should look and refshed matter Nourish your outer inner beauty with our essential oil infused beauty products Lorem ipsum dolor sit amet, consectetur.</p>
                    <form action="{{route('add-to-cart')}}">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product->id}}">
                        <div class="actions">
                            <div class="quantity">
                                <label for="quantity" class="screen-reader-text">Quantity:</label>
                                <button class="quantity-minus qty-btn"><i class="fal fa-minus"></i></button>
                                <input type="number" id="quantity" class="qty-input" step="1" min="1" max="100" name="quantity" value="1" title="Qty">
                                <button class="quantity-plus qty-btn"><i class="fal fa-plus"></i></button>
                            </div>
                            <button type="submit" class="vs-btn">Add to Cart</button>
                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                            <a href="#" class="icon-btn"><i class="far fa-search"></i></a>
                        </div>
                    </form>
                    <div class="product-getway">
                        <span class="getway-title">GUARANTEED SAFE CHECKOUT:</span>
                        <img src="{{asset('theme/assets/img/widget/cards-2.png')}}" alt="cards">
                    </div>
                    <div class="product_meta">
                        <span class="sku_wrapper">SKU: <span class="sku">#ND{{$product->id}}</span></span>
                        <span class="posted_in">Category:<a href="{{url('/')}}/products/{{$Category->slung}}" rel="tag">{{$Category->title}}</a></span>
                        <?php $cat = DB::table('categories')->get(); ?>
                        <span>Tags:
                            @foreach ($cat as $cats)
                            <a href="{{url('/')}}/products/{{$cats->slung}}" rel="tag">{{$cats->title}}</a>
                            @endforeach
                        </span>
                    </div>
                </div>
            </div>
        </div>


        <div class="product-description">
            <h2>Overview</h2>
            <div class="title-divider1"></div>
            <div class="description">
                <p>
                    {!!html_entity_decode($product->content)!!}
                </p>

            </div>
        </div>
        <!--============================== Product Area ==============================-->
        <?php
            $Related = DB::table('products')->where('category_id',$Category->id)->limit('4')->get();
        ?>
        <h2>Related Products</h2>
        <div class="title-divider1"></div>
        <div class="row vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2">
            @foreach ($Related as $rel)
            <div class="col-md-6 col-lg-3 col-xl-3">
                <div class="vs-product product-style1">
                    <div class="product-img">
                        <a class="products-img" href="{{url('/')}}/products/{{$Category->slung}}/{{$rel->slung}}">
                            <img class="product-image" src="{{url('/')}}/uploads/products/{{$rel->image}}" alt="Image">
                        </a>
                    </div>
                    <div class="product-content">
                        @if($rel->price == $rel->price_raw)
                        <span class="product-price">kes {{$rel->price}}</span>
                        @else
                        <span class="product-price">kes {{$rel->price_raw}} <del>kes {{$rel->price}}</del></span>
                        @endif

                        <h3 class="product-title" style="min-height:80px"><a class="text-inherit" href="{{url('/')}}products/{{$Category->slung}}/{{$rel->slung}}">{{$rel->title}}</a></h3>

                        <div class="actions">
                            <a href="{{url('/')}}/products/{{$Category->slung}}/{{$rel->slung}}" class="vs-btn"><i class="far fa-shopping-cart"></i>Shop Now</a>
                            <a href="#" class="icon-btn"><i class="far fa-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endforeach

@endsection
