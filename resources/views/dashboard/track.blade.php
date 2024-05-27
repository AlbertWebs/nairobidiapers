@extends('front.master-client')

@section('content')
<main>


    <!-- Order Tracking Start -->
    <div class="order-tracking-section section-padding-2">
        <!-- Order Tracking wrapper Start -->
        <div class="order-tracking-wrapper">
            <div class="row">
                <div class="col-md-6" style="margin:0 auto">
                    <!-- Order Tracking Form Start -->
                    <div class="order-tracking-form">
                        <div class="order-tracking-form__wrapper">
                            <p class="text-center">
                                To track your order please enter your
                                Order ID in the box below and press the
                                "Track" button. This was given to you on
                                your receipt and in the confirmation
                                email you should have received.
                            </p>
                            <form action="#">
                                <div class="single-form">
                                    <label class="single-form__label">Order ID</label>
                                    <input class="single-form__input" type="text" placeholder="Found in your order confirmation email." />
                                </div>
                                <div class="single-form">
                                    <label class="single-form__label">Billing email</label>
                                    <input class="single-form__input" type="text" placeholder="Email you used during checkout." />
                                </div>
                                <div class="single-form">
                                    <button class="single-form__btn btn">
                                        Track
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Order Tracking Form End -->
                </div>

            </div>
        </div>
        <!-- Order Tracking wrapper End -->
    </div>
    <!-- Order Tracking End -->


</main>
@endsection
