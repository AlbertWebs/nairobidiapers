<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Primary Meta Tags -->
    <title>Nairobi Diapers | Quality Adult Diapers, Baby Diapers & Baby Wipes in Kenya in Kenya</title>
    <meta name="title" content="Nairobi Diapers | Quality Adult Diapers, Baby Diapers & Baby Wipes in Kenya">
    <meta name="description" content="Nairobi Diapers offers high-quality adult diapers, baby diapers, and baby wipes. Our products ensure maximum comfort, superior absorbency, and reliable protection.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.nairobidiapers.co.ke/">
    <meta property="og:title" content="Nairobi Diapers | Quality Adult Diapers, Baby Diapers & Baby Wipes in Kenya">
    <meta property="og:description" content="Nairobi Diapers offers high-quality adult diapers, baby diapers, and baby wipes. Our products ensure maximum comfort, superior absorbency, and reliable protection.">
    <meta property="og:image" content="https://www.nairobidiapers.co.ke/images/nairobi-diapers-logo.png">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.nairobidiapers.co.ke/">
    <meta property="twitter:title" content="Nairobi Diapers | Quality Adult Diapers, Baby Diapers & Baby Wipes in Kenya">
    <meta property="twitter:description" content="Nairobi Diapers offers high-quality adult diapers, baby diapers, and baby wipes. Our products ensure maximum comfort, superior absorbency, and reliable protection.">
    <meta property="twitter:image" content="https://www.nairobidiapers.co.ke/images/nairobi-diapers-logo.png">

    <!-- Additional Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="Nairobi Diapers, adult diapers, baby diapers, baby wipes, incontinence products, hypoallergenic diapers, Kenya diapers, affordable diapers, quality baby wipes">
    <meta name="author" content="Nairobi Diapers">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    <meta name="distribution" content="global">

    <!-- Favicons - Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="{{asset('theme/assets/img/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('theme/assets/img/favicon.ico')}}" type="image/x-icon">

    <!--==============================
	  Google Fonts
	============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&amp;family=Jost:wght@400;500&amp;display=swap" rel="stylesheet">


    <!--==============================
	    All CSS File
	============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('theme/assets/css/app.min.css')}}"> -->
    <!-- Fontawesome Icon -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/fontawesome.min.css')}}">
    <!-- Layerslider -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/layerslider.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/magnific-popup.min.css')}}">
    <!-- Slick Slider -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/slick.min.css')}}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body class="layout4">


    <!--[if lte IE 9]>
    	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->



    <!--********************************
   		Code Start From Here
	******************************** -->




    <!--==============================
     Preloader
    ==============================-->
    <div class="preloader">
        <button class="vs-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div><!--==============================
    Mobile Menu
    ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{url('/')}}"><img src="{{asset('theme/assets/img/logo.svg')}}" alt="Kiddino"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="menu-item-has-children v1">
                        <a href="{{url('/')}}"><i class="fa fa-house"></i>Home</a>
                    </li>

                    <?php
                        $Cats = DB::table('categories')->get()
                    ?>
                    @foreach ($Cats as $c)
                    <li>
                        <a href="{{url('/')}}/products/{{$c->slung}}">{{$c->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div><!--==============================
    Sidemenu
    ============================== -->
    <div class="sidemenu-wrapper d-none d-lg-block">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="widget-about">
                    <div class="footer-logo"><img src="{{asset('theme/assets/img/logo.svg')}}" alt="Kiddino"></div>
                    <p class="mb-0">We are constantly expanding the range of services offered, taking care of children of all ages.</p>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Get In Touch</h3>
                <div>
                    <p class="footer-text">Monday to Friday: <span class="time">8.30am – 02.00pm</span></p>
                    <p class="footer-text">Saturday, Sunday: <span class="time">Close</span></p>
                    <p class="footer-info"><i class="fal fa-envelope"></i>Email: <a href="mailto:info@nairobidiapers.co.ke">info@nairobidiapers.co.ke</a></p>
                    <p class="footer-info"><i class="fas fa-mobile-alt"></i>Phone: <a href="tel:+4402076897888">+44 (0) 207 689 7888</a></p>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Latest News</h3>
                <div class="recent-post-wrap">
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="far fa-calendar-alt"></i>December 3, 2022</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">A very warm welcome to our new Treasurer</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/recent-post-1-2.jpg')}}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="far fa-calendar-alt"></i>February 15, 2022</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">German kinder and garten mean child</a></h4>
                        </div>
                    </div>
                    <div class="recent-post">
                        <div class="media-img">
                            <a href="blog-details.html"><img src="{{asset('theme/assets/img/blog/recent-post-1-3.jpg')}}" alt="Blog Image"></a>
                        </div>
                        <div class="media-body">
                            <div class="recent-post-meta">
                                <a href="blog.html"><i class="far fa-calendar-alt"></i>Augest 20, 2022</a>
                            </div>
                            <h4 class="post-title"><a class="text-inherit" href="blog-details.html">English uses term to refer to the earliest</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--==============================
    Popup Search Box
    ============================== -->
    <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" class="border-theme" placeholder="What are you looking for">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    @include('front.header')
    <!--==============================
      Hero Area
    ==============================-->

    @yield('content')



    @include('front.footer')





    <a href="#" class="scrollToTop scroll-btn"><i class="far fa-arrow-up"></i></a>

    <!--********************************
			Code End  Here
	******************************** -->

    <!--==============================
        All Js File
    ============================== -->
    <!-- Jquery -->
    <script src="{{asset('theme/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.fancybox.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('theme/assets/js/slick.min.js')}}"></script>
    <!-- <script src="{{asset('theme/assets/js/app.min.js')}}"></script> -->
    <!-- Layerslider -->
    <script src="{{asset('theme/assets/js/layerslider.utils.js')}}"></script>
    <script src="{{asset('theme/assets/js/layerslider.transitions.js')}}"></script>
    <script src="{{asset('theme/assets/js/layerslider.kreaturamedia.jquery.js')}}"></script>
    <!-- jquery ui -->
    <script src="{{asset('theme/assets/js/jquery-ui.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('theme/assets/js/bootstrap.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('theme/assets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Isotope Filter -->
    <script src="{{asset('theme/assets/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/isotope.pkgd.min.js')}}"></script>
    <!-- Main Js File -->
    <script src="{{asset('theme/assets/js/datecounter.js')}}"></script>
    <script src="{{asset('theme/assets/js/main.js')}}"></script>


</body>


</html>
