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
        @for($i = 0; $i < 5; $i++)
            @if($i == 0)
                <h1 class="foodtitle wow fadeInRight">Breakfast</h1>
                <div class="mainMenuList">
            @endif
            @if($i == 1)
                <h1 class="foodtitle wow fadeInRight">Lunch</h1>
                <div class="mainMenuList">
            @endif
            @if($i == 2)
                <h1 class="foodtitle wow fadeInRight">Dinner</h1>
                <div class="mainMenuList">
            @endif
            @if($i == 3)
                <h1 class="foodtitle wow fadeInRight">Dessert</h1>
                <div class="mainMenuList">
            @endif
            @if($i == 4)
                <h1 class="foodtitle wow fadeInRight">Drink</h1>
                <div class="mainMenuList">
            @endif
            @foreach ($foods as $food)
            @if($food->category != $i)
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
        @endfor      
    </section>
   @include('partials/footer')
    </div>
@endsection
