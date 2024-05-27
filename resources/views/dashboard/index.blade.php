@extends('front.master-client')

@section('content')
<main>
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-section">
        <div class="container-fluid custom-container">
            <div class="breadcrumb-wrapper text-center">
                {{-- <h2 class="breadcrumb-wrapper__title">My Account</h2>
                <ul class="breadcrumb-wrapper__items justify-content-center">
                    <li><a href="index.html">Home</a></li>
                    <li><span>My Account</span></li>
                </ul> --}}
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- My Account Start -->
    <div class="row" style="max-width:1000px; margin:0 auto">
        <div class="container">
            <div class="my-account-section section-padding-2">
                <div class="container-fluid custom-container">
                    <!-- My Account Tabs Start -->
                    <div class="my-account-tab">
                        <!-- My Account Tabs Menu Start -->
                        <div class="my-account-tab__menu">
                            <ul class="nav justify-content-center">
                                <li>
                                    <button class="account-btn active" data-bs-toggle="tab" data-bs-target="#dashboard" type="button">
                                        Dashboard
                                    </button>
                                </li>
                                <li>
                                    <button class="account-btn" data-bs-toggle="tab" data-bs-target="#orders" type="button">
                                        Orders
                                    </button>
                                </li>
                                <li>
                                    <button class="account-btn" data-bs-toggle="tab" data-bs-target="#account-detail" type="button">
                                        Account Detail
                                    </button>
                                {{-- </li>

                                <li>
                                    <a class="account-btn" href="{{url('/')}}/dashboard/track-order">Track Order</a>
                                </li> --}}
                                <li>
                                    <a class="account-btn" href="{{url('/')}}/">Home</a>
                                </li>


                                <li>
                                    <a class="account-btn" href="{{url('/')}}/dashboard/logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                        <!-- My Account Tabs Menu End -->

                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="dashboard">
                                <!-- My Account Dashboard Start -->
                                <div class="my-account-dashboard">
                                    <p>
                                        Hello <strong>{{Auth::User()->name}}</strong> (not
                                        <strong>{{Auth::User()->name}}</strong>?
                                        <a href="{{url('/')}}/dashboard/logout">Log out</a>)
                                    </p>
                                    <p>
                                        From your account dashboard you can view
                                        your <a href="#">recent orders</a>,
                                        manage your
                                        <a href="#">shipping and billing addresses</a>, and
                                        <a href="#">edit your password and account
                                            details</a>.
                                    </p>
                                </div>
                                <!-- My Account Dashboard End -->
                            </div>
                            <div class="tab-pane fade" id="orders">
                                <!-- My Account Orders Start -->
                                <div class="my-account-orders">
                                    <div class="my-account-table table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        <span>Order</span>
                                                    </th>
                                                    <th>
                                                        <span>Product</span>
                                                    </th>
                                                    <th>
                                                        <span>Date</span>
                                                    </th>
                                                    <th>
                                                        <span>Status</span>
                                                    </th>
                                                    <th>
                                                        <span>Total</span>
                                                    </th>
                                                    <th>
                                                        <span>Actions</span>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <?php
                                                $Orders = DB::table('orders')->where('user_id',Auth::User()->id)->get();

                                            ?>
                                            <tbody>
                                                @foreach ($Orders as $order)
                                                    <?php
                                                       $ProductOrder = DB::table('orders_product')->where('orders_id',$order->id)->get();
                                                    //    dd($ProductOrder);
                                                    ?>
                                                    @foreach ($ProductOrder as $proOrder)
                                                        <?php $Product = \App\Models\Product::where('id',$proOrder->product_id)->get(); ?>

                                                        <tr>
                                                            <td>
                                                                <a href="#"> #{{$order->id}} </a>
                                                            </td>
                                                            <td>
                                                                <a href="#"> {{$Product->title}} </a>
                                                            </td>
                                                            <td>
                                                                <time>
                                                                    {{date('M d, Y', strtotime($order->created_at))}}
                                                                </time>
                                                            </td>
                                                            <td>{{$order->status}}</td>
                                                            <td>
                                                                <span>{{$order->total}}</span>

                                                            </td>
                                                            <td>
                                                                <a  class="btn" href="{{url('/')}}/shopping-cart/reorder/{{$order->id}}">
                                                                    Re-Order
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endforeach


                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- My Account Orders End -->
                            </div>

                            <div class="tab-pane fade" id="account-detail">
                                <!-- My Account Account Detail Start -->
                                <div class="my-account-detail">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <label class="single-form__label">Full Name *</label>
                                                    <input class="single-form__input" value="{{Auth::User()->name}}" name="name" type="text" />
                                                </div>
                                                <!-- Single Form Start -->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <label class="single-form__label">Address *</label>
                                                    <input class="single-form__input" value="{{Auth::User()->address}}" name="address" type="text" />
                                                </div>
                                                <!-- Single Form Start -->
                                            </div>
                                            <div class="col-md-6">
                                                <!-- Single Form Start -->
                                                <div class="single-form">
                                                    <label class="single-form__label">Email address *</label>
                                                    <input class="single-form__input" value="{{Auth::User()->email}}" type="email" />
                                                </div>
                                                <!-- Single Form Start -->
                                            </div>
                                        </div>


                                        <p class="my-account-detail__legend">
                                            <strong>Password change</strong>
                                        </p>

                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">Current password (leave blank
                                                to leave unchanged)</label>
                                            <input class="single-form__input" type="password" />
                                        </div>
                                        <!-- Single Form Start -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">New password (leave blank to
                                                leave unchanged)</label>
                                            <input class="single-form__input" type="password" />
                                        </div>
                                        <!-- Single Form Start -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <label class="single-form__label">Confirm new password</label>
                                            <input class="single-form__input" type="password" />
                                        </div>
                                        <!-- Single Form Start -->
                                        <!-- Single Form Start -->
                                        <div class="single-form">
                                            <button class="single-form__btn btn">
                                                Save Change
                                            </button>
                                        </div>
                                        <!-- Single Form Start -->
                                    </form>
                                </div>
                                <!-- My Account Account Detail End -->
                            </div>
                        </div>
                    </div>
                    <!-- My Account Tabs End -->
                </div>
            </div>
        </div>
    </div>
    <!-- My Account End -->


</main>
@endsection
