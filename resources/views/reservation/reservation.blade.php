@extends('layouts/main')
@section('content')
    <div class="wrap">
      @include('partials/navbar')
        <section class="ReservationBg">
          <div class="container">
            <div class="row">
              <div class="reservation height">
                <div class="reservationTitle">
                  <h1>Reservation</h1>
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
            <div class="row">
              <div class="reserve-form">
                <form method="post" id="bookingForm" action="{{route("newBooking")}}" class="form-horizontal">
                  <div class="form-group">
                    <label for="SelectPeople" class="col-sm-2 control-label">
                      People 
                    </label>
                    <div class="col-sm-8">
                      <select class="form-control" id="SelectPeople" name="numPerson">
                        <option value="1">1 people</option>
                        <option value="2">2 people</option>
                        <option value="3">3 people</option>
                        <option value="4">4 people</option>
                        <option value="5">5 people</option>
                        <option value="6">6 people</option>
                        <option value="7">7 people</option>
                        <option value="8">8 people</option>
                        <option value="9">9 people</option>
                        <option value="10">10 people</option>
                        <option value="11">more...</option>
                      </select> 
                  </div>
                  </div>
                  <div class='form-group'>
                    <label for="time" class="col-sm-2 control-label">
                      Time
                    </label>
                    <div class="col-sm-8">
                      <input type="time" placeholder="hh:mm" name="time" class="form-control" >
                    </div>
                  </div>
                  
                  <div class='form-group'>
                    <label for="time" class="col-sm-2 control-label">
                      Date
                    </label>
                    <div class="col-sm-8">
                      <input type="date" name="date" class="form-control">
                    </div>
                  </div>
                  <div class="row">                 
                      @csrf
                    <input type="hidden" name ="id" value="{{Auth::user()->id}}">
                      <input
                        class="sign-sms"
                        type="text"
                        name="message"
                        placeholder="Message"
                      />
                    <div class="products-btn contact-btn ">
                      <div class="products-btn reserve-btn">
                        <a class="creative" onclick="document.getElementById('bookingForm').submit();">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Book</a>
                    </div>
                    </div>
                  </div>                  
                </form>
                <div class="reserve-img">
                  <img src="{{asset('img/reserve_bg.png')}}" alt="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="panel panel-primary">
                <div class="panel-heading">Saved Reservations</div>
                             
                <!-- Table -->
                <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Number of person</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  @foreach ($bookings as $booking)
                      <tr id="ajax{{$booking->id}}">
                      
                        <th>{{$booking->id}}</th>
                        <th>{{$booking->numPerson}}</th>
                        <th>{{$booking->date}}</th>
                        <th>{{$booking->hour}}</th>
                        <th>  
                          @if ($booking->status==0)
                          Processing
                          @endif 
                          @if ($booking->status==1)
                            Cancelled
                          @endif
                          @if ($booking->status==2)
                          Done
                          @endif                                            
                        </th>
                        <th>
                          <a class="btn btn-danger deleteButton" jsId="{{$booking->id}}">Delete</a>
                        </th>
                        <th>
                          <a class="btn btn-info" href="{{route('getEdit',['id'=>$booking->id])}}">Update</a>
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