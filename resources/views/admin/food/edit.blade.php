<?php $categories = ['Breakfast', 'Lunch', 'Dinner', 'Dessert', 'Drink'];?>
@extends('admin/layouts.main')

@section('content')
    <div class="container" style="width: 600px;">
    <form class="border border-light p-5" action="{{ route('updateFood', $food->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{$food->name}}">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{$food->price}}">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" name="category">
                @for($i = 0; $i < 5; $i++)
                    @if($i != $food->category)
                        <option>{{ $categories[$i] }}</option>
                    @else
                        <option selected>{{ $categories[$i] }}</option>
                    @endif
                @endfor
            </select>
        </div>

        <div class="form-group">
            <label for="Rank">Rank</label>
            <select class="form-control" name="rank">
               <!-- Showing entered value of rank -->
                @for($i = 1; $i <= 10; $i++)
                    @if($i != $food->rank)
                        <option>{{$i}}</option>
                    @else
                        <option selected>{{$i}}</option>
                    @endif
                @endfor
                
            </select>
        </div>

        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">Photo</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="food_image" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="food_image">Choose file</label>
            </div>
        </div>
        <br>

        <div class="form-group">
            <textarea class="form-control" name="description" rows="3" placeholder="Description about food">{{$food->description}}</textarea>
        </div>

        <button class="btn btn-info btn-block" type="submit">Save</button>

    </form>
</div>
@endsection