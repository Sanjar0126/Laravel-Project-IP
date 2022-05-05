@extends('admin/layouts.main')

@section('content')
    <div class="container" style="width: 600px;">
    <form class="border border-light p-5" action="{{ route('updateCat', $category) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value={{ $category->name }}>
        </div>

        <div class="form-group">
            <label for="name">Order</label>
            <input type="number" name="order" class="form-control" placeholder="Order" value={{ $category->order }}>
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Description about category">{{ $category->description }}</textarea>
        </div>

        <button class="btn btn-info btn-block" type="submit">Save</button>

    </form>
</div>
@endsection