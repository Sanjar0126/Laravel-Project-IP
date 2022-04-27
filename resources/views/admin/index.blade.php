@extends('admin/layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">telephone</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr id="ajax{{$user->id}}">
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->telNumber}}</td>
                        <td>
                            <a class="btn btn-danger deleteButton" jsId="{{$user->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach        
            </tbody>
          </table>
    </div>
</div>
@endsection
