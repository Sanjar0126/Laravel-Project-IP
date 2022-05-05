@extends('admin/layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">name</th>
                <th scope="col">description</th>
                <th scope="col">order</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr id="ajaxContact{{$category->id}}">
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                        <td>{{$category->order}}</td>
                        <td>
                            <a class="btn btn-danger deleteContactButton" jsId="{{$category->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach        
            </tbody>
          </table>
    </div>
</div>
@endsection
