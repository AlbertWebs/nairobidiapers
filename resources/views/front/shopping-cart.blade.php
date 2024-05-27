@extends('front.master-product')

@section('content')

<!--==============================
Cart Area
==============================-->
<div class="vs-cart-wrapper  space-top space-extra-bottom">
    <div class="container">

        <form action="#" class="woocommerce-cart-form">
            <table class="cart_table">
                <thead>
                    <tr>
                        <th class="cart-col-image">Image</th>
                        <th class="cart-col-productname">Product Name</th>
                        <th class="cart-col-price">Price</th>
                        <th class="cart-col-quantity">Quantity</th>
                        <th class="cart-col-total">Total</th>
                        <th class="cart-col-remove">Remove</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($CartContents as $CartContent)
                        <?php
                           $Products = DB::table('products')->where('title',$CartContent->name)->get();
                        ?>

                        @foreach ($Products as $Product)
                            <?php
                                $Category = \App\Models\Category::find($Product->category_id);
                            ?>
                            <tr class="cart_item">
                                <td data-title="Product">
                                    <a class="cart-productimage" href="{{url('/')}}/products/{{$Category->slung}}/{{$Product->slung}}"><img width="91" height="91" src="{{url('/')}}/uploads/products/{{$Product->image}}" alt="product"></a>
                                </td>
                                <td data-title="Name">
                                    <a class="cart-productname" href="{{url('/')}}/products/{{$Category->slung}}/{{$Product->slung}}">{{$CartContent->name}}</a>
                                </td>
                                <td data-title="Price">
                                    <span class="amount"><bdi><span>kes</span>{{$CartContent->price}}</bdi></span>
                                </td>
                                <td data-title="Quantity">
                                    <div class="quantity">
                                        <button class="quantity-minus qty-btn"><i class="far fa-chevron-down"></i></button>
                                        <input type="number" class="qty-input" step="1" min="1" max="100" name="quantity" value="{{$CartContent->qty}}" title="Qty">
                                        <button class="quantity-plus qty-btn"><i class="far fa-chevron-up"></i></button>
                                    </div>
                                </td>
                                <td data-title="Total">
                                    <span class="amount"><bdi><span>kes </span>{{$CartContent->total}}</bdi></span>
                                </td>
                                <td data-title="Remove">
                                    <a href="{{url('/')}}/remove-cart/{{$CartContent->rowId}}" class="remove"><i class="fal fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    @endforeach


                    <tr>
                        <td colspan="6" class="actions">
                            <div class="vs-cart-coupon">
                                {{-- <input type="text" class="form-control" placeholder="Coupon Code...">
                                <button type="submit" class="vs-btn">Apply Coupon</button> --}}
                            </div>
                            <button type="submit" class="vs-btn">Update cart</button>
                            <a href="shop.html" class="vs-btn">Continue Shopping</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <div class="row justify-content-end">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <h2 class="h4 summary-title">Cart Totals</h2>
                <table class="cart_totals">
                    <tbody>
                        <tr>
                            <td>Cart Subtotal</td>
                            <td data-title="Cart Subtotal">
                                <span class="amount"><bdi><span>kes </span>{{Cart::subtotal()}}</bdi></span>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr class="order-total">
                            <td>Order Total</td>
                            <td data-title="Total">
                                <strong><span class="amount"><bdi><span>kes </span>{{Cart::total()}}</bdi></span></strong>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="wc-proceed-to-checkout mb-30">

                    <a href="https://wa.me/+254723711637/?text= Hello, I am Ordering: @foreach ($CartContents as $CartContent) {{$CartContent->qty}} {{$CartContent->name}} at {{$CartContent->price}}, @endforeach Total: {{Cart::total()}}" class="vs-btn">Confirm Order</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
