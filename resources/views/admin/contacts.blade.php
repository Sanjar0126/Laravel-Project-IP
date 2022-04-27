@extends('admin/layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">user id</th>
                <th scope="col">name</th>
                <th scope="col">message</th>
                <th scope="col">date</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    @php
                        $name = $users->find("$contact->user_id")->name;
                    @endphp
                    <tr id="ajaxContact{{$contact->id}}">
                        <th scope="row">{{$contact->user_id}}</th>
                        <td>{{$name}}</td>
                        <td>{{$contact->message}}</td>
                        <td>{{$contact->created_at}}</td>
                        <td>
                            <a class="btn btn-danger deleteContactButton" jsId="{{$contact->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach        
            </tbody>
          </table>
    </div>
</div>
@endsection
