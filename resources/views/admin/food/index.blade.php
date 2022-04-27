<!-- Given Array is used to convert category number to category name -->
<?php $categoryNumberToName = ['Breakfast', 'Lunch', 'Dinner', 'Dessert', 'Drink']; ?>

@extends('admin/layouts.main')
@section('content')

<div class="row row-cols-1 row-cols-md-3">
    @foreach ($foods as $food)
        <div class="col mb-4" id="ajaxFood{{$food->id}}">
        <!-- Card -->
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$food->name}}</h4>
                </div>
                <!--Card image-->
                <div class="view overlay">
                    <div class="row">
                        <img class="card-img-top col-md-8" src="/storage/food_images/{{$food->food_image}}" alt="Card image cap">
                        <div class="col-md-4">
                            <p class="card-text">Price: {{$food->price}}$</p>
                            <p class="card-text">Rank: {{$food->rank}}</p>
                            <p class="card-text">Category: {{$categoryNumberToName[$food->category]}}</p>
                        </div>    
                    </div>
                </div>
                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                   
                    <p class="card-text">{{$food->description}}</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    <div class="row">
                        <form style="col-md-6"action="{{ route('editFood',  $food->id)}}" method="GET">
                            <button type="submit" class="btn btn-light-blue btn-md">Edit</button>
                        </form>
                        <a class="btn btn-danger btn-md deleteFoodButton col-md-3" jsFoodId="{{$food->id}}">Delete</a>  
                    </div>                  
                </div>

            </div>
        </div>
    @endforeach
</div>

<div style="display: flex; justify-content: center;">{{$foods->links()}}</div>

@endsection
