<section>
    <div class="topHeader">
        <i class="fa fa-times" id="exitmnu" aria-hidden="true"></i>
        <div class="topHeaderTop animated zoomIn">
            <div class="container1">
                <div class="row">
                    <div class="menu-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <p>menu</p>
                    </div>
                    <div class="topHeaderAddress col-md-4 col-sm-4">
                        <div class="topHeaderAddressMapIcon">
                            <img src="img/map.png" alt="" />
                        </div>
                        <div class="topHeaderAddresses">
                            <h4>Address</h4>
                            <h5>street Ziyolilar,Tashkent</h5>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 logo">
                        <div class="topHeaderLogo">
                            <div class="thl-wrapper">
                                <a href="{{route('homeIndex')}}">
                                    <img
                                        src="img/logo.png"
                                        alt=""
                                    />
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="sailDepartment col-md-4 col-sm-4">
                        <div class="sailDepartmentLeft">
                            <div class="sailDepartmentPhoneIcon">
                                <img src="img/phone.png" alt="" />
                            </div>
                            <div class="sailDepartmentSailing">
                                <h4>Call us</h4>
                                <h5>+998 97 777 77 77</h5>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
        <div
            class="topHeaderBottom sidebar container wow fadeInDown"
            data-wow-duration="2s"
            data-wow-delay="0.5s">
            <div class="menu">
                <ul class="topHeaderList">
                    <li>
                    <a href="{{route('homeIndex')}}">Home</a>
                    </li>
                    <li>
                    <a href="{{route('about')}}">About us</a>
                    </li>
                    <li>
                    <a href="{{route('menu')}}">Menu</a>
                    </li>
                </ul>
                <ul class="topHeaderList leftlist">
                    <li>
                    <a href="{{route('reservation')}}">Book </a>
                    </li>
                    <li>
                    <a href="{{route('contact')}}">Contacts</a>
                    </li>
                    @if(Auth::guest())
                        <li>
                            <a href="{{route('login')}}">login</a>
                        </li>
                        <li>
                            <a href="{{route('register')}}">Register</a>
                        </li>
                        
                    @else
                        <li>
                            <a onclick="document.getElementById('logout-form').submit()" >Logout</a>
                        </li>
                    @endif
                </ul>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
        
                </ul>
            </div>
        </div>
    </div>
</section>