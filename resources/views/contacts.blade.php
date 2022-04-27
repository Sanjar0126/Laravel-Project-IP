@extends('layouts/main')
@section('content')
    <div class="wrap">
      @include('partials/navbar')
      
      <section class="Contacts">
        <div class="contacts">
          <div class="container">
            <div class="row">
              <div class="contactsTitle">
                <h1>Contacts</h1>
              </div>
              <div class="contactsAndAdd col-md-6">
                <div class="contactAdress">
                  <h4>Address</h4>
                  <h5>street Ziyolilar,Tashkent</h5>
                </div>
                <div class="contactTel">
                  <h4>
                    Phone Numbers
                  </h4>
                  <h5>
                    +998 97 777 77 77
                  </h5>
                  <h5>
                    +998 71 000 00 00
                  </h5>
                </div>
              </div>
              <div class="contactForms col-md-6">
                
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
              
              <div class="row">
                  <h2>Leave Comments</h2>
                <form method="post" id="contactForm" action="{{route("newContact")}}">
                    @csrf
                  <input type="hidden" name ="id" value="{{Auth::user()->id}}">
                    <input
                      class="sign-sms"
                      type="text"
                      name="message"
                      placeholder="Message"
                    />
                  </form>
                  <div class="products-btn contact-btn ">
                    <h4><a onclick="document.getElementById('contactForm').submit();">Send</a></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @include('partials/footer')
    </div>
    @endsection   
