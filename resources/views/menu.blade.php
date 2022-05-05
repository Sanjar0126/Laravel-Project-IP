@extends('layouts/main')
@section('content')
    <div class="wrap">
    @include('partials/navbar')
    <section>
        <div class="menubg">
            <div class="container">
                <div class="row">
                    <div class="mainMenu height">
                        <div class="mainMenuTitle">
                            <h1>Menu</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @foreach ($categories as $category)

            <h1 class="foodtitle wow fadeInRight">{{ $category->name }}</h1>
            <div class="mainMenuList">

            @foreach ($foods as $food)
            @if($food->category_id != $category->id)
                @continue
            @endif            
                <div class="menuItem">
                    <div
                        class="menuborder-wrap wow fadeInDown"
                        data-wow-duration="1s"
                        data-wow-delay="0.3s"
                    >
                        <img src="/storage/food_images/{{$food->food_image}}" alt="" />
                    </div>
                    <div
                        class="mainMenuContent wow fadeInDown"
                        data-wow-duration="1s"
                        data-wow-delay="0.6s"
                    >
                        <h4>{{$food->name}}</h4>
                        <h5>{{$food->price}}$</h5>
                        <p>
                            {{$food->description}}
                        </p>
                    </div>
                </div>             
            @endforeach
        </div> 
        @endforeach      
    </section>
   @include('partials/footer')
    </div>
@endsection
