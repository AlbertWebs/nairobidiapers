<header class="vs-header header-layout4">
        <div class="header-top4">
            <div class="container-style4">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-auto text-center">
                        <div class="header-links v4 style2 style-white">
                            <ul>
                                <li><i class="fas fa-envelope"></i>Email: <a href="mailto:nairobidiapers.co.ke">info@nairobidiapers.co.ke</a></li>
                                <li><i class="fas fa-mobile-alt"></i>Phone: <a href="tel:+254 723 711637">+254 723 711637</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-links v5 style-white">
                            <ul>
                                <li>
                                    <ul class="social-links4">
                                        <li><a href="https://web.facebook.com/nairobi.diapers.co.ke/"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="https://www.instagram.com/nairobi_diapers/"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </li>
                                <li><a href="{{url('/')}}/shopping-cart"><i class="far fa-shopping-cart"></i>My Shopping Cart</a></li>
                                <!-- <li><a href="contact.html" class="searchBoxTggler"><i class="far fa-search"></i>Search Keyword</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrap">
            <div class="sticky-active">
                <div class="container-style4">
                    <div class="header-lower4">
                        <div class="row gx-3 align-items-center justify-content-between">
                            <div class="col-8 col-sm-auto">
                                <div class="header-logo2">
                                    <a href="{{url('/')}}">
                                        <img style="" src="{{asset('theme/assets/img/logo.png')}}" alt="logo">
                                    </a>
                                </div>
                            </div>
                            <div class="col">
                                @include('front.nav')
                            </div>
                            <div class="col-auto  d-none d-lg-block">
                                <div class="header-icons4">
                                    <button class="simple-icon v2 searchBoxTggler"><i class="far fa-search"></i></button>
                                    <?php
                                       $CartCount = Cart::count();
                                    ?>
                                    <a href="{{url('/')}}/shopping-cart" title="" class="simple-icon cart">
                                        <i class="fa fa-shopping-bag"></i>
                                        <span>{{$CartCount}}</span>
                                    </a>
                                </div>
                            </div>

                            <div class="col-auto">
                                <a href="https://wa.me/+254723711637/?text='Hello There, I am writing a message form Nairobi Diapers Website'" class="vs-btn v4 sideMenuTogglers"><i  class="fab fa-whatsapp"></i> &nbsp; Talk To Us</a>
                            </div>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
