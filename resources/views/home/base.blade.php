<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->favicon)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Financial and Investment company made just for you."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->favicon)}}" />
    @stack('css')

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('home/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/color.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elpath.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/banner.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/feature.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/about.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/service.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/cta.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/testimonial.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/chooseus.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/working-process.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/projects.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/news.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/elements-css/subscribe.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>
@inject('injected','App\Defaults\Custom')

<div class="boxed_wrapper">


    <!-- preloader -->
    <div class="loader-wrap">
        <div class="preloader">
            <div class="preloader-close">x</div>
            <div id="handle-preloader" class="handle-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        @foreach(str_split($siteName) as $char)
                            <span data-text-preloader="{{ $char }}" class="letters-loading">{{ $char }}</span>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->


    <!-- main header -->
    <header class="main-header header-style-two">
        <!-- header-top -->
        <div class="header-top">
            <div class="auto-container">
                <div class="top-inner">
                    <div class="top-left">
                        <ul class="info clearfix">
                            <li><i class="icon-1"></i>Mon-Fri 8:00 am-6:00 pm</li>
                            @if($web->phone)
                                <li><i class="icon-2"></i><a href="tel:{{$web->phone}}">{{ $web->phone }}</a></li>
                            @endif
                            <li><i class="icon-3"></i><a href="mailto:{{$web->email}}">{{ $web->email }}</a></li>
                        </ul>
                    </div>
                    <div class="top-right">
                        <div class="login"><a href="{{ route('login') }}">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- header-lower -->
        <div class="header-lower">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset('home/images/'.$web->logo) }}" alt=""></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li>
                                        <a href="{{ url('/') }}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('about') }}">About</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            @foreach($injected->getServices() as $service)
                                                <li><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="{{url('plans')}}">Plans</a></li>
                                            <li><a href="{{url('faqs')}}">Frequently Asked Questions</a></li>
                                            <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                                            <li><a href="{{url('privacy')}}">Privacy policy</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown"><a href="#">Panel</a>
                                        <ul>
                                            @guest
                                                <li><a href="{{route('login')}}" >Login</a></li>
                                                <li><a href="{{route('register')}}">Register</a></li>
                                            @endguest
                                            @auth
                                                <li><a href="{{route('user.dashboard')}}" >Dashboard</a></li>
                                            @endauth
                                        </ul>
                                    </li>
                                    <li><a href="{{url('contact')}}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                    <ul class="menu-right-content">
                        <li class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn-one">Create Account</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{ url('/') }}"><img src="{{ asset('home/images/'.$web->logo) }}" alt=""></a></figure>
                    </div>
                    <div class="menu-area clearfix">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <ul class="menu-right-content">
                        <li class="btn-box">
                            <a href="{{ route('register') }}">Register</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ url('/') }}"><img src="{{ asset('home/images/'.$web->logo) }}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>
                        {{$web->address}}
                    </li>
                    @if($web->phone)
                        <li><a href="tel:{{$web->phone}}">{{ $web->phone }}</a></li>
                    @endif
                    <li><a href="mailto:{{$web->email}}">{{$web->email}}</a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    @yield('content')


    <!-- main-footer -->
    <footer class="main-footer alternat-2">
        <div class="widget-section">
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url({{ asset('home/images/shape/shape-27.png') }});"></div>
                <div class="pattern-2" style="background-image: url({{ asset('home/images/shape/shape-28.png') }});"></div>
            </div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="footer-logo"><a href="index"><img src="{{ asset('home/images/'.$web->logo) }}" alt=""></a></figure>
                            <div class="text">
                                <p>At {{ $siteName }}, we provide tailored investment strategies designed to help you grow, manage, and protect your wealth across changing markets.</p>
                                <p>Whether you're planning for retirement, exploring alternative investments, or looking to diversify your portfolio, our team is here to guide you every step of the way.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="links-widget footer-widget ml_50">
                            <div class="widget-title">
                                <h3>Quick Link</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><a href="{{ url('about') }}">About Us</a></li>
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ url('plans') }}">Pricing</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="links-widget footer-widget ml_30">
                            <div class="widget-title">
                                <h3>Useful Links</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="links-list clearfix">
                                    <li><a href="{{ url('privacy') }}">Privacy Policy</a></li>
                                    <li><a href="{{ url('terms') }}">Terms & Condition</a></li>
                                    <li><a href="{{ url('contact') }}">Support</a></li>
                                    <li><a href="{{ url('faq') }}">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <div class="widget-title">
                                <h3>Contact</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="info-list clearfix">
                                    <li><i class="icon-23"></i>{{ $web->address }}</li>
                                    <li><i class="icon-3"></i><a href="mailto:{{ $web->email }}">{{ $web->email }}</a></li>
                                    @if($web->phone)
                                        <li><i class="icon-2"></i><a href="tel:{{ $web->phone }}">{{ $web->phone }}</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom centred">
            <div class="auto-container">
                <div class="copyright">
                    <p>Copyright 2018 - {{date('Y')}} by <a href="{{url('/')}}">{{$siteName}}</a> All Right Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <div class="scroll-to-top">
        <div>
            <div class="scroll-top-inner">
                <div class="scroll-bar">
                    <div class="bar-inner"></div>
                </div>
                <div class="scroll-bar-text">Go To Top</div>
            </div>
        </div>
    </div>
    <!-- Scroll to top end -->

</div>


<!-- jequery plugins -->
<script src="{{ asset('home/js/jquery.js') }}"></script>
<script src="{{ asset('home/js/popper.min.js') }}"></script>
<script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('home/js/owl.js') }}"></script>
<script src="{{ asset('home/js/wow.js') }}"></script>
<script src="{{ asset('home/js/validation.js') }}"></script>
<script src="{{ asset('home/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('home/js/appear.js') }}"></script>
<script src="{{ asset('home/js/scrollbar.js') }}"></script>
<script src="{{ asset('home/js/isotope.js') }}"></script>
<script src="{{ asset('home/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('home/js/parallax-scroll.js') }}"></script>

<!-- main-js -->
<script src="{{ asset('home/js/script.js') }}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = 'c342651089fb7cdbfb954bff3ccc16ab395e58c2';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body><!-- End of .page_wrapper -->
</html>
