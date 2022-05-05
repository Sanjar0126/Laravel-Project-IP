@extends('layouts/main')
@section('content')
        <div class="wrap">
            
    <div class="wrap">
        @include('partials/navbar')
         @if(Session::has('info'))
                <div class="mb-3">
                    <div class="alert alert-danger">
                        {{ Session::get('info') }}
                    </div>
                </div>
            @endif
            
                    <!-- Carousel -->
                    <div class="hdCarousel">
                        <div class="owl-carousel owl-theme">
                            <!-- Owl -->
                            <div class="hdItem">
                                <img src="img/header_bg2.webp" alt="" />
                                <div class="hdContent animated fadeIn">
                                    <div class="hdContentImg">
                                        <img src="img/txtbg.png" alt="" />
                                    </div>
                                    <h1>
                                        <span>"Cluckin' Bell"</span><br />
                                        Fast food with quality ingredients
                                        and excellent service
                                    </h1>
                                </div>
                            </div>
                            <div class="hdItem">
                                <img src="img/header_bg1.webp" alt="" />
                                <div class="hdContent animated fadeIn">
                                    <div class="hdContentImg">
                                        <img src="img/txtbg.png" alt="" />
                                    </div>
                                    <h1>
                                        <span>"Cluckin' Bell"</span><br />
                                        Fast food restaurant with great attitude,
                                        delicious dishes
                                    </h1>
                                </div>
                            </div>
                        </div>
                        <div class="wave">
                            <img src="css/bg.svg" alt="" draggable="false" />
                        </div>
                    </div>
            
            <!-- Static  -->
            <section>
                <div class="why">
                    <div class="container">
                        <div class="row">
                            <div class="whyTitle">
                                <h1>Specials & Features</h1>
                            </div>
                            <div class="whyContent">
                                <h5>
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit. In dictum lectus ut ligula
                                    fringilla, eu euismod turpis pulvinar.
                                    Vestibulum eget urna ac dolor consequat
                                    aliquam.
                                </h5>
                            </div>
                            <div class="whyContentimg icon">
                                <div class="col-md-3 col-sm-6">
                                    <img src='img/main-1.svg' style="width: 120px; height: 120px">
                                    <h5>
                                        Pizza Lovers <br />
                                        Specials    
                                    </h5>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <img src='img/main-2.svg' style="width: 120px; height: 120px">
                                    <h5>
                                        Fresh <br />
                                        Drinks
                                    </h5>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <img src='img/main-3.svg' style="width: 120px; height: 120px">
                                    <h5>
                                        Cake <br />
                                        Slices
                                    </h5>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <img src='img/main-4.svg' style="width: 120px; height: 120px">

                                    <h5>
                                        Burger <br />
                                        Sandwich
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Static -->

        @include('partials/footer')
    </div>
@endsection
