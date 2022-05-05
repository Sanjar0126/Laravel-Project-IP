@extends('admin/layouts.main')

@section('content')
    <div class="container" style="width: 600px;">
    <form class="border border-light p-5" action="{{ route('storeCat') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="name">Order</label>
            <input type="number" name="order" class="form-control" placeholder="Order">
        </div>

        <div class="form-group">
            <label for="name">Description</label>
            <textarea class="form-control" name="description" rows="3" placeholder="Description about category"></textarea>
        </div>

        <button class="btn btn-info btn-block" type="submit">Save</button>

    </form>
</div>
@endsection