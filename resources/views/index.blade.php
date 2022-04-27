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

            <!-- Menu -->
            <section class="OurProducts">
                <div class="container">
                    <div class="row">
                        <div class="products">
                            <div class="companyTitle productsTitle">
                                <h1>Popular foods</h1>
                            </div>
                            @if(count($foods) == 4)
                            @for($i = 0; $i < 2; $i++)
                            <div class="productsButter">
                                <div
                                    class="col-md-6 col-sm-6 butter wow fadeInLeft"
                                    data-wow-duration="2s"
                                    data-wow-delay="0.5s"
                                >
                                    <div class="border-wrap">
                                        <div class="products-border">
                                            <img width="150px" height="auto"
                                                src="/storage/food_images/{{$foods[$i * 2]->food_image}}"
                                                class="creamy"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div class="butterContent">
                                        <h4>{{$foods[$i * 2]->name}}</h4>
                                        <h5>{{$foods[$i * 2]->price}}$</h5>
                                        <p>
                                            {{$foods[$i * 2]->description}}
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="col-md-6 col-sm-6 margarine wow fadeInRight"
                                    data-wow-duration="2s"
                                    data-wow-delay="1s"
                                >
                                    <div class="border-wrap">
                                        <div class="products-border">
                                            <img width="150px" height="auto"
                                                src="/storage/food_images/{{$foods[$i * 2 + 1]->food_image}}"
                                                class="creamy"
                                                alt=""
                                            />
                                        </div>
                                    </div>
                                    <div class="butterContent">
                                        <h4>{{$foods[$i * 2 + 1]->name}}</h4>
                                        <h5>{{$foods[$i * 2 + 1]->price}}$</h5>
                                        <p>
                                            {{$foods[$i * 2 + 1]->description}}
                                        </p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            @endfor
                            @endif
                            <div class="products-btn">
                                <a class="creative" href="{{route('menu')}}">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    Menu</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Menu -->

        @include('partials/footer')
    </div>
@endsection
