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

    <!--Project Details Start-->
    <section class="project-details">
        <div class="container">
            <div class="project-details__top">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__img">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details__bottom">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="project-details__right">
                            <div class="project-details__title-box">
                                <h3 class="project-details__title-two">{{ $service->title }}</h3>
                                <p class="project-details__text">
                                    {!! str_replace('MYSITE',$siteName,$service->content) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
