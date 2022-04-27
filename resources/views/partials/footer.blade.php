 <!-- Footer Start -->
 <section>
    <div class="oleoFoot">
        <div class="container">
            <div class="row">
                <div class="footerList">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                        <li><a href="menu.html">Menu</a></li>
                        <li>
                            <a href="reservation.html"
                                >Reservation</a
                            >
                        </li>
                        <li>
                            <a href="contacts.html">Contacts</a>
                        </li>
                        @if(Auth::guest())
                            <li>
                                <a href="register.html">Register now</a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="footerAddress">
                    <div
                        class="companyFootaddress col-md-4 col-sm-4"
                    >
                        <div class="leftAdd">
                            <div
                                class="topHeaderAddressMapIcon companyFooticon"
                            >
                                <img src="img/map.png" alt="" />
                            </div>
                            <div
                                class="topHeaderAddresses companyFootadd"
                            >
                                <h5>street Ziyolilar,Tashkent</h5>
                            </div>
                        </div>
                    </div>
                    <div
                        class="sailDepartmentLeft companyFootLeft col-md-4 col-sm-4"
                    >
                        <div class="leftPhone">
                            <div
                                class="sailDepartmentPhoneIcon companyFooticon"
                            >
                                <img src="img/phone.png" alt="" />
                            </div>
                            <div
                                class="sailDepartmentSailing companyFootphone"
                            >
                                <h5>
                                    <a href="tel:+998 97 777 77 77"
                                        >+998 97 777 77 77</a
                                    >
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="siteDevelopment col-md-4 col-sm-4">
                        <h4>
                            Developers:
                            <a href="#">Team Elite</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer End -->