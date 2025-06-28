@extends('home.base')
@section('content')
    <!-- page-title -->
    <section class="page-title centred">
        <div class="bg-layer" style="background-image: url({{asset('home/images/background/page-title.jpg')}} );"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>{{ $pageName }}</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>{{ $pageName }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- page-title end -->

    <!-- about-section -->
    <section class="about-section p_relative">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box p_relative pr_50 mr_30">
                            <figure class="image image-1">
                                <img src="{{ asset('home/images/resource/about-1.jpg') }}" alt="">
                            </figure>
                            <figure class="image image-2">
                                <img src="{{ asset('home/images/resource/about-2.jpg') }}" alt="">
                            </figure>
                            <div class="video-btn">
                                <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption="">
                                    <i class="icon-10"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative ml_30">
                            <div class="sec-title mb_25">
                                <span class="sub-title">About {{ $siteName }}</span>
                                <h2>Dedicated and <br/>Professional Investment Services</h2>
                            </div>

                            <div class="text mb_35">
                                <p>{{ $siteName }} is built on the belief that every individual and business deserves a clear, strategic approach to building wealth. From first-time investors to seasoned professionals, we provide the tools and insights needed to grow, manage, and secure your finances confidently.</p>
                                <p>
                                    Founded in 2014, we are a global investment agency helping individuals build their financial dreams into reality. From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
                                </p>
                                <p class="about-one__text-2">{{$siteName}} stands as one of the largest and most seasoned international private equity firms. Our accomplished team of investment professionals is primarily dedicated to strategic investments.</p>
                                <p class="about-one__text-2">
                                    {{$siteName}} is managed by a team of trading experts specializing in generating profits through currency, stocks, options, and commodities trading on the foreign exchange market. We employ a variety of trading techniques to meet client goals.
                                </p>
                                <p class="about-one__text-2">
                                    The {{$siteName}} team comprises financial market professionals assembled to provide the best possible trading conditions. Our specialists played a key role in developing technical specifications for a modern platform suitable for both beginners and experienced traders.
                                </p>
                                <p class="about-one__text-2">
                                    Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
                                </p>
                            </div>

                            <div class="inner-box mb_35">
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-11"></i></div>
                                    <h3>Solution Focused</h3>
                                    <p>We tailor every financial solution to your unique goals, market environment, and growth horizon.</p>
                                </div>
                                <div class="single-item">
                                    <div class="icon-box"><i class="icon-11"></i></div>
                                    <h3>99.99% Success Rate</h3>
                                    <p>Our results speak for themselves—with client retention and satisfaction among the highest in the industry.</p>
                                </div>
                            </div>

                            <figure class="signature">
                                <img src="{{ asset('home/images/images/icons/signature-1.png') }}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- about-section end -->


    <!-- Start About Area -->
    <div class="about-area ptb-100 mt-5">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-12 col-md-12 p-0">
                   <img src="{{asset('home/images/certificate.jpeg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->




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


@endsection
