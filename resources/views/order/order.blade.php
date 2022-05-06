@extends('layouts/main')
@section('content')
    <div class="wrap">
      @include('partials/navbar')
        <section class="OrderBg">
          <div class="container">
            <div class="row">
              <div class="order height">
                <div class="orderTitle">
                  <h1>Order</h1>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section>
          <div class="container">
            <br>
            <br>
            <div class="row">
              @if(Session::has('info'))
              <div class="row">
                  <div class="alert alert-info">
                      {{ Session::get('info') }}
                  </div>
              </div>
              @endif
              @error('message')
                  <div class="alert alert-warning row">
                    <span>
                        <strong>{{ $message }}</strong>
                    </span>
                  </div>
              @enderror

            </div>
                             
                <!-- Table -->
                <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>User</th>
                  </tr>
                  @foreach ($orders as $order)
                      <tr id="ajax{{$order->id}}">
                      
                        <th>{{$order->id}}</th>
                        <th>{{$order->date}}</th>
                        <th>{{$order->price}}</th>
                        <th>  
                          @if ($order->status==0)
                          Processing
                          @endif 
                          @if ($order->status==1)
                            Paid
                          @endif
                          @if ($order->status==2)
                          Done
                          @endif
                          @if ($order->status==-1)
                          Cancel
                          @endif 
                        </th>
                        <th>{{$order->user_id->name}}</th>
                        <th>
                          <a class="btn btn-danger deleteButton" jsId="{{$order->id}}">Delete</a>
                        </th>
                        <th>
                          <a class="btn btn-info" href="{{route('getEdit',['id'=>$order->id])}}">Update</a>
                        </th>
                      </tr>
                  @endforeach
                </table>
              </div>
            </div>
          </div>
        </section>
     @include('partials/footer')
  </div>
  @endsection   