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

    <!--FAQ Page Start-->
    <section class="faq-page">
        <div class="container">
            <div class="faq-page__top">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Address Card -->
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Address</h5>
                                <p class="card-text">{!! $web->address !!}</p>
                            </div>
                        </div>
                    </div>

                    @if($web->phone)
                        <!-- Phone Card -->
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Phone</h5>
                                    <p class="card-text">
                                        <a href="tel:{{$web->phone}}">Call</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Email Card -->
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Email</h5>
                                <p class="card-text">
                                    <a href="mailto:{{$web->email}}">{{$web->email}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Business One -->



@endsection
