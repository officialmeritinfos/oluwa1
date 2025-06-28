@extends('home.base')
@section('content')

    <!-- banner-style-two -->
    <section class="banner-style-two p_relative centred">
        <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
            <div class="slide-item p_relative">
                <div class="image-layer p_absolute" style="background-image:url({{ asset('home/images/banner/banner-6.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <span>Smart Financial Solutions</span>
                        <h2>Secure Your Future with Strategic Investments</h2>
                        <p>We help you make informed decisions to grow, protect, and diversify your capital across dynamic markets.</p>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn-one">Create an Account</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="slide-item p_relative">
                <div class="image-layer p_absolute" style="background-image:url({{ asset('home/images/banner/banner-7.jpg') }})"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <span>Long-Term Wealth Planning</span>
                        <h2>Invest Today, Build a Stronger Tomorrow</h2>
                        <p>From oil and mining to real estate, {{ $siteName }} connects you to high-value opportunities with expert guidance.</p>
                        <div class="btn-box">
                            <a href="{{ route('register') }}" class="theme-btn-one">Join Now!</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- banner-style-two end -->


    <!-- feature-style-two -->
    <section class="feature-style-two bg-color-2 pt_150 pb_150">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('home/images/shape/shape-22.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('home/images/shape/shape-23.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 title-column">
                    <div class="sec-title light pr_100">
                        <span class="sub-title">Features</span>
                        <h2>Professional and Reliable Investment Advisory Services</h2>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two mt_50 wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-7"></i></div>
                            <h3>Portfolio Planning</h3>
                            <p>We help you build and manage a portfolio that aligns with your goals, risk profile, and financial vision.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                    <div class="feature-block-two mt_50 wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-9"></i></div>
                            <h3>Investment Insights</h3>
                            <p>Access expert-backed research and financial intelligence to make better decisions in high-potential sectors.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- feature-style-two -->


    <!-- about-style-two -->
    <section class="about-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_60">
                <span class="sub-title">About {{ $siteName }}</span>
                <h2>Dedicated and Professional <br />Investment Advisory Services</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_two">
                        <div class="image-box mr_30">
                            <figure class="image"><img src="{{ asset('home/images/resource/about-3.jpg') }}" alt=""></figure>
                            <div class="image-content">
                                <h2>20</h2>
                                <h3>Years of Investment Experience</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="content_block_five">
                        <div class="content-box ml_30">
                            <div class="text mb_30">
                                <p>For over two decades, {{ $siteName }} has helped individuals and institutions make confident financial decisions. Our approach is grounded in deep market knowledge, data-driven strategies, and a commitment to long-term client success.</p>
                            </div>
                            <div class="inner-box mb_30">
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-11"></i></div>
                                    <h3>Solution Focused</h3>
                                    <p>We provide actionable strategies tailored to your financial goals, risk profile, and investment timeline.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-11"></i></div>
                                    <h3>99.99% Client Retention</h3>
                                    <p>Our transparent process, consistent returns, and client-first mindset keep partners with us long-term.</p>
                                </div>
                            </div>
                            <figure class="signature"><img src="{{ asset('home/images/icons/signature-1.png') }}" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-style-two end -->


    <!-- service-section -->
    <section class="service-section p_relative centred sec-pad">
        <div class="auto-container">
            <div class="sec-title mb_70">
                <span class="sub-title">What We Do</span>
                <h2>Expert Investment & Financial Advisory Services</h2>
            </div>
            <div class="row clearfix">

                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInLeft animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="static-content">
                                <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-4.png') }});"></div>
                                <div class="icon-box"><i class="icon-7"></i></div>
                                <h3><a href="#">Strategy & Planning</a></h3>
                                <p>We design strategic financial roadmaps tailored to your goals, risk appetite, and growth timeline.</p>
                            </div>
                            <div class="overlay-content">
                                <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-5.png') }});"></div>
                                <h3><a href="#">Strategy & Planning</a></h3>
                                <p>We design strategic financial roadmaps tailored to your goals, risk appetite, and growth timeline.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="static-content">
                                <div class="icon-box"><i class="icon-12"></i></div>
                                <h3><a href="#">Wealth Program Management</a></h3>
                                <p>Comprehensive oversight of your assets with regular performance reviews and growth optimization.</p>
                            </div>
                            <div class="overlay-content">
                                <h3><a href="#">Wealth Program Management</a></h3>
                                <p>Comprehensive oversight of your assets with regular performance reviews and growth optimization.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInRight animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="static-content">
                                <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-6.png') }});"></div>
                                <div class="icon-box"><i class="icon-8"></i></div>
                                <h3><a href="#">Tax Management</a></h3>
                                <p>Minimize your tax liabilities and ensure compliance with personalized tax-saving strategies.</p>
                            </div>
                            <div class="overlay-content">
                                <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-7.png') }});"></div>
                                <h3><a href="#">Tax Management</a></h3>
                                <p>Minimize your tax liabilities and ensure compliance with personalized tax-saving strategies.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInLeft animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="static-content">
                                <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-8.png') }});"></div>
                                <div class="icon-box"><i class="icon-13"></i></div>
                                <h3><a href="#">Investment Policy Design</a></h3>
                                <p>We craft disciplined, risk-aware investment policies to guide long-term capital growth.</p>
                            </div>
                            <div class="overlay-content">
                                <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-9.png') }});"></div>
                                <h3><a href="#">Investment Policy Design</a></h3>
                                <p>We craft disciplined, risk-aware investment policies to guide long-term capital growth.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="static-content">
                                <div class="icon-box"><i class="icon-14"></i></div>
                                <h3><a href="#">Financial Advisory</a></h3>
                                <p>Our advisors provide clear, unbiased financial guidance to help you make informed decisions.</p>
                            </div>
                            <div class="overlay-content">
                                <h3><a href="#">Financial Advisory</a></h3>
                                <p>Our advisors provide clear, unbiased financial guidance to help you make informed decisions.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInRight animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="static-content">
                                <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-10.png') }});"></div>
                                <div class="icon-box"><i class="icon-15"></i></div>
                                <h3><a href="#">Insurance Strategy</a></h3>
                                <p>Protect your income, assets, and future with smart insurance planning and coverage options.</p>
                            </div>
                            <div class="overlay-content">
                                <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-11.png') }});"></div>
                                <h3><a href="#">Insurance Strategy</a></h3>
                                <p>Protect your income, assets, and future with smart insurance planning and coverage options.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- service-section end -->



    <!-- service-style-two -->
    <section class="service-style-two p_relative bg-color-1">
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">What We Do</span>
                <h2>Provide the Best Consulting <br />in This Industry</h2>
            </div>
            <div class="row clearfix">
                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box"><img src="{{asset('home/serv/'.$service->photo)}}" alt=""></figure>
                                <div class="lower-content">
                                    <div class="inner">
                                        <div class="icon-box"><i class="icon-7"></i></div>
                                        <h3><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h3>
                                        <p>
                                            {{$service->short}}
                                        </p>
                                        <div class="btn-box">
                                            <a href="{{route('service.details',['id'=>$service->id])}}" class="theme-btn-one">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- service-style-two end -->


    <!-- testimonial-style-two -->
    <section class="testimonial-style-two p_relative">
        <div class="auto-container">
            <div class="sec-title mb_50 centred">
                <span class="sub-title">Testimonials</span>
                <h2>What They’re Saying <br />About Us</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme owl-dots-one owl-nav-none">

                <div class="testimonial-block-two">
                    <figure class="thumb-box">
                        <img src="https://ui-avatars.com/api/?name=Emily+Clark&background=3c72fc&color=fff" alt="Emily Clark">
                    </figure>
                    <div class="inner-box">
                        <h3>Emily Clark</h3>
                        <span class="designation">Private Investor</span>
                        <p>“{{ $siteName }} helped me diversify my portfolio into energy and agriculture with ease. Their strategies are clear, practical, and surprisingly effective.”</p>
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="testimonial-block-two">
                    <figure class="thumb-box">
                        <img src="https://ui-avatars.com/api/?name=Marc+Dupont&background=3c72fc&color=fff" alt="Marc Dupont">
                    </figure>
                    <div class="inner-box">
                        <h3>Marc Dupont</h3>
                        <span class="designation">Business Consultant</span>
                        <p>“I’ve worked with several firms across Europe, but the professionalism and foresight at {{ $siteName }} is unmatched. They helped me plan my financial future with confidence.”</p>
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="testimonial-block-two">
                    <figure class="thumb-box">
                        <img src="https://ui-avatars.com/api/?name=Sofia+Martinez&background=3c72fc&color=fff" alt="Sofia Martinez">
                    </figure>
                    <div class="inner-box">
                        <h3>Sofia Martinez</h3>
                        <span class="designation">HR Director</span>
                        <p>“Thanks to {{ $siteName }}, I built a solid retirement plan with smart investments in real estate and energy. Their approach is both personal and professional.”</p>
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="testimonial-block-two">
                    <figure class="thumb-box">
                        <img src="https://ui-avatars.com/api/?name=Thomas+Bennett&background=3c72fc&color=fff" alt="Thomas Bennett">
                    </figure>
                    <div class="inner-box">
                        <h3>Thomas Bennett</h3>
                        <span class="designation">Startup Founder</span>
                        <p>“Their market insights helped me scale my investments while managing risk. I highly recommend {{ $siteName }} for anyone serious about long-term financial growth.”</p>
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="testimonial-block-two">
                    <figure class="thumb-box">
                        <img src="https://ui-avatars.com/api/?name=Claire+Moreau&background=3c72fc&color=fff" alt="Claire Moreau">
                    </figure>
                    <div class="inner-box">
                        <h3>Claire Moreau</h3>
                        <span class="designation">Nonprofit Director</span>
                        <p>“I’ve never felt more secure about where my funds are going. {{ $siteName }} is transparent, informative, and genuinely cares about results.”</p>
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                </div>

                <div class="testimonial-block-two">
                    <figure class="thumb-box">
                        <img src="https://ui-avatars.com/api/?name=Luis+Ramirez&background=3c72fc&color=fff" alt="Luis Ramirez">
                    </figure>
                    <div class="inner-box">
                        <h3>Luis Ramirez</h3>
                        <span class="designation">Real Estate Investor</span>
                        <p>“Their team guided me through high-yield, low-risk options I didn’t even know existed. They’ve helped maximize returns across my entire portfolio.”</p>
                        <ul class="rating clearfix">
                            <li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="fas fa-star"></i></li><li><i class="far fa-star"></i></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- testimonial-style-two end -->




    <!-- chooseus-style-two -->
    <section class="chooseus-style-two sec-pad">
        <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url({{ asset('home/images/background/chooseus-bg-2.jpg') }});"></div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-xl-6 col-lg-12 offset-xl-6 content-column">
                    <div class="content_block_six">
                        <div class="content-box p_relative ml_30">
                            <div class="sec-title mb_50">
                                <span class="sub-title">Why Choose {{ $siteName }}</span>
                                <h2>Why Investors Trust Us</h2>
                            </div>
                            <ul class="accordion-box">

                                <li class="accordion block active-block">
                                    <div class="acc-btn active">
                                        <div class="icon-box"></div>
                                        <h3>Quick Response</h3>
                                    </div>
                                    <div class="acc-content current">
                                        <div class="text">
                                            <p>We understand that time is money. Our dedicated team is always available to answer questions and take swift action when opportunities arise or concerns emerge.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"></div>
                                        <h3>Experienced Advisors</h3>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>Our team brings decades of combined experience in wealth management, risk analysis, and alternative investments—ensuring your money is guided by real expertise.</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="accordion block">
                                    <div class="acc-btn">
                                        <div class="icon-box"></div>
                                        <h3>Flexible Investment Options</h3>
                                    </div>
                                    <div class="acc-content">
                                        <div class="text">
                                            <p>Whether you're investing in oil, mining, real estate, or long-term retirement vehicles, we offer flexible structures to match your financial situation and goals.</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- chooseus-style-two end -->



    <!-- working-process-section -->
    <section class="working-process-section alternat-2 sec-pad centred">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url({{ asset('home/images/shape/shape-25.png') }});"></div>
            <div class="pattern-2" style="background-image: url({{ asset('home/images/shape/shape-26.png') }});"></div>
        </div>
        <div class="auto-container">
            <div class="sec-title mb_100">
                <span class="sub-title">How It Works</span>
                <h2>Start Investing in 3 Easy Steps</h2>
            </div>
            <div class="inner-container">

                <div class="working-block-one">
                    <div class="inner-box">
                        <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-24.png') }});"></div>
                        <div class="count-text">
                            <h3>01 <span>Step</span></h3>
                        </div>
                        <div class="text">
                            <div class="inner">
                                <h3>Create Your Account</h3>
                                <p>Sign up for a free account to access your personal investment dashboard.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="working-block-one">
                    <div class="inner-box">
                        <div class="shape" style="background-image: url({{ asset('home/images/shape/shape-24.png') }});"></div>
                        <div class="count-text">
                            <h3>02 <span>Step</span></h3>
                        </div>
                        <div class="text">
                            <div class="inner">
                                <h3>Fund & Choose a Plan</h3>
                                <p>Deposit funds securely, explore available investment plans, and select one that suits your goals.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="working-block-one">
                    <div class="inner-box">
                        <div class="count-text">
                            <h3>03 <span>Step</span></h3>
                        </div>
                        <div class="text">
                            <div class="inner">
                                <h3>Earn Returns & Withdraw</h3>
                                <p>Watch your investment grow, track your returns, and withdraw earnings anytime you're ready.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- working-process-section end -->


    <!-- project-style-two -->
    <section class="project-style-two">
        <div class="bg-layer" style="background-image: url({{ asset('home/images/background/project-bg.jpg') }});"></div>
        <div class="outer-container">
            <div class="project-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">

                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="static-content">
                            <span>Consulting</span>
                            <h3><a href="#">Business Leadership</a></h3>
                        </div>
                        <div class="overlay-content">
                            <span>Consulting</span>
                            <h3><a href="#">Business Leadership</a></h3>
                            <p>Empowering individuals and institutions with leadership strategies that drive long-term results.</p>
                        </div>
                    </div>
                </div>

                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="static-content">
                            <span>Marketing</span>
                            <h3><a href="#">Market Expansion</a></h3>
                        </div>
                        <div class="overlay-content">
                            <span>Marketing</span>
                            <h3><a href="#">Market Expansion</a></h3>
                            <p>Strategic investment tools designed to help you scale across regions and reach new sectors.</p>
                        </div>
                    </div>
                </div>

                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="static-content">
                            <span>Financial</span>
                            <h3><a href="#">Capital Management</a></h3>
                        </div>
                        <div class="overlay-content">
                            <span>Financial</span>
                            <h3><a href="#">Capital Management</a></h3>
                            <p>From portfolio planning to capital reallocation, we support your evolving financial structure.</p>
                        </div>
                    </div>
                </div>

                <div class="project-block-two">
                    <div class="inner-box">
                        <div class="static-content">
                            <span>Technical</span>
                            <h3><a href="#">Startup Business</a></h3>
                        </div>
                        <div class="overlay-content">
                            <span>Technical</span>
                            <h3><a href="#">Startup Business</a></h3>
                            <p>Backing innovation-driven startups with financial insights and structured early-stage funding.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- project-style-two end -->



    <!-- news-style-two -->
    <section class="news-style-two sec-pad">
        <div class="auto-container">
            <div class="sec-title centred mb_50">
                <span class="sub-title">Latest News</span>
                <h2>Get More Update From <br />{{ $siteName }}</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 news-block">
                    <div class="news-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                                <div class="tradingview-widget-container__widget"></div>
                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                    {
                                        "feedMode": "market",
                                        "market": "stock",
                                        "isTransparent": false,
                                        "displayMode": "regular",
                                        "width": "100%",
                                        "height": "400",
                                        "colorTheme": "light",
                                        "locale": "en"
                                    }
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- news-style-two end -->

@endsection
