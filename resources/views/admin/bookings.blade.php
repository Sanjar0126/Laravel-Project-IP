@extends('admin/layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">User id</th>
                <th scope="col">Username</th>
                <th scope="col">Date</th>
                <th scope="col">Hour</th>
                <th scope="col">NumPerson</th>                
                <th scope="col">status</th>
                <th scope="col">Message</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bookings as $booking)
                        @php
                            $name = $users->find("$booking->user_id")->name;
                        @endphp
                    <tr id="book{{$booking->id}}">
                        <th scope="row">{{$booking->user_id}}</th>
                        <td>{{$name}}</td>
                        <td>{{$booking->date}}</td>
                        <td>{{$booking->hour}}</td>
                        <td>{{$booking->numPerson}}</td>
                        <td>
                            @if($booking->status==0)
                            <select name="status" id="booking{{$booking->id}}" class="browser-default custom-select">
                                <option value="0" selected="selected">Proceessing</option>
                                <option value="1">Cancelled</option>
                                <option value="2">Done</option>
                            </select>
                            @endif
                            @if($booking->status==1)
                            <select name="status" id="booking{{$booking->id}}" class="browser-default custom-select">
                                <option value="0">Proceessing</option>
                                <option value="1" selected="selected">Cancelled</option>
                                <option value="2">Done</option>
                            </select>
                            @endif
                            @if($booking->status==2)
                            <select name="status" id="booking{{$booking->id}}" class="browser-default custom-select">
                                <option value="0">Proceessing</option>
                                <option value="1">Cancelled</option>
                                <option value="2" selected="selected">Done</option>
                            </select>
                            @endif
                        </td>
                        <td>{{$booking->message}}</td>
                        <td>
                            <a class="btn btn-danger deleteBookButton" jsBookId="{{$booking->id}}">Delete</a>
                            <a class="btn btn-info updateBookButton" jsBookId="{{$booking->id}}">Update</a>
                        </td>
                    </tr>
                @endforeach        
            </tbody>
          </table>
    </div>
</div>
@endsection
