@extends('admin/layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Username</th>
                <th scope="col">Phone number</th>
                <th scope="col">Address</th>
                <th scope="col">Role</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr id="ajax{{$user->id}}">
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->username}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->address}}</td>
                            @if ($user->role === 2)
                                <td>Admin</td>
                            @elseif ($user->role === 1)
                                <td>User</td>
                            @else
                                <td>Wrong role code</td>
                            @endif
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
