@extends('layouts.main')
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
                <form method="post" id="bookingForm" action="{{route("postEdit")}}" class="form-horizontal">
                  <div class="form-group">
                    <label for="SelectPeople" class="col-sm-2 control-label">
                      People 
                    </label>
                    <div class="col-sm-8">
                      <select class="form-control" id="SelectPeople" name="numPerson">
                        @for($i = 1; $i<=10; $i++)
                          @if($booking->numPerson == $i)
                            <option selected="selected" value="{{$i}}">{{$i}} people</option>
                          @else
                            <option value="{{$i}}">{{$i}} people</option>
                          @endif
                          @endfor                          
                          <option value="11">more...</option>
                      </select> 
                    </div>
                  </div>
                  <div class='form-group'>
                    <label for="time" class="col-sm-2 control-label">
                      Time
                    </label>
                    <div class="col-sm-8">
                      <input type="time" placeholder="hh:mm" name="time" value="{{$booking->hour}}" class="form-control" >
                    </div>
                  </div>
                  
                  <div class='form-group'>
                    <label for="date" class="col-sm-2 control-label">
                      Date
                    </label>
                    <div class="col-sm-8">
                      <input type="date" name="date" class="form-control" value="{{$booking->date}}">
                    </div>
                  </div>
                  <div class="row">                 
                      @csrf
                    <input type="hidden" name ="id" value="{{$booking->id}}">
                      <input
                        class="sign-sms"
                        type="text"
                        name="message"
                        placeholder="Message"
                        value="{{$booking->message}}"
                      />
                    <div class="products-btn contact-btn ">
                      <div class="products-btn reserve-btn">
                        <a class="creative" onclick="document.getElementById('bookingForm').submit();">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Update</a>
                    </div>
                    </div>
                  </div>                  
                </form>
                <div class="reserve-img">
                  <img src="{{asset('img/reserve_bg.png')}}" alt="">
                </div>
              </div>
            </div>
          </div>
        </section>
     @include('partials/footer')
  </div>
  @endsection   