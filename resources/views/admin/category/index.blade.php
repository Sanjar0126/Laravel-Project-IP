@extends('admin/layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">order</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr id="ajaxCat{{$category->id}}">
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->order}}</td>
                        <td style="display: flex; align-items:center">
                            <a class="btn btn-danger deleteCatButton" jsId="{{$category->id}}">Delete</a>
                            <form action="{{ route('editCat',  $category)}}" method="GET">
                                <button type="submit" class="btn btn-light-blue ">Edit</button>
                            </form> 
                        </td>
                        
                    </tr>
                @endforeach        
            </tbody>
          </table>
    </div>
</div>
@endsection
