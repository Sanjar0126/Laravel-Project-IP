@extends('admin/layouts.main')

@section('content')
    <div class="container" style="width: 600px;">
    <form class="border border-light p-5" action="{{ route('storeFood') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price">
        </div>

        <div class="form-group">
            <label for="category">Category</label>
            <select class="form-control" name="category">
                <option>Breakfast</option>
                <option>Lunch</option>
                <option>Dinner</option>
                <option>Dessert</option>
                <option>Drink</option>
            </select>
        </div>

        <div class="form-group">
            <label for="Rank">Rank</label>
            <select class="form-control" name="rank">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
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
            <textarea class="form-control" name="description" rows="3" placeholder="Description about food"></textarea>
        </div>

        <button class="btn btn-info btn-block" type="submit">Save</button>

    </form>
</div>
@endsection