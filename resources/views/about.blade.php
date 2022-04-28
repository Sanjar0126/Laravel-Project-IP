@extends('layouts/main')
@section('content')
    <div class="wrap">
      
      @include('partials/navbar')
      <section class="companyOleo">
        <div class="companyBg">
          <div class="container">
            <div class="row">
              <div class="company">
                <div class="companyTitle companyTitle2">
                  <h1>About Us</h1>
                </div>
                <div class="companyContent">
                  <div class="roundedContent animated fadeIn">
                    <div class="rondedImg">
                      <img src="img/cluckin-logo.webp" alt="" />
                    </div>
                    <div class="companyItems">
                      <div
                        class="comp-item produce wow jackInTheBox"
                        data-wow-duration="2s"
                        data-wow-delay="0.2s"
                      >
                        <div class="produceImg">
                          <img src="img/pro.png" alt="" />
                        </div>
                        <div class="titleContent">
                          <h4>Checked</h4>
                          <p>
                            Our restaurant was checked by Michelin inspectors several times.It was considered for gaining a star.
                          </p>
                        </div>
                      </div>
                      <div
                        class="comp-item offer wow jackInTheBox"
                        data-wow-duration="2s"
                        data-wow-delay="0.4s"
                      >
                        <div class="offerImg">
                          <img src="img/offer.png" alt="" />
                        </div>
                        <div class="titleContent">
                          <h4>Offers</h4>
                          <p>
                            What we offer is sitting in beautifully designed place and tasting meals as a truth Aristocrat.
                          </p>
                        </div>
                      </div>
                      <div
                        class="comp-item pride wow jackInTheBox"
                        data-wow-duration="2s"
                        data-wow-delay="0.6s"
                      >
                        <div class="prideImg">
                          <img src="img/prideof.png" alt="" />
                        </div>
                        <div class="titleContent">
                          <h4>Pride</h4>
                          <p>
                            Not every restaurant bragging with having 3 Michelin stars. We are proud to announce about that. Thank you for being with us.
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="companyAbout">
                    <div
                      class="companyAboutContentLeft wow fadeInDown"
                      data-wow-duration="2s"
                      data-wow-delay="0.5s"
                    >
                      <p>
                        <span>Restaurant «Giordino»</span>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. In dictum lectus ut ligula
                        fringilla, eu euismod turpis pulvinar.
                        Vestibulum eget urna ac dolor consequat
                        aliquam.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. In dictum lectus ut ligula
                        fringilla, eu euismod turpis pulvinar.
                        Vestibulum eget urna ac dolor consequat
                        aliquam.
                      </p>
                    </div>
                    <div
                      class="companyAboutContentRight wow fadeInDown"
                      data-wow-duration="2s"
                      data-wow-delay="1s"
                    >
                      <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. In dictum lectus ut ligula
                        fringilla, eu euismod turpis pulvinar.
                        Vestibulum eget urna ac dolor consequat
                        aliquam.
                      </p>
                      <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. In dictum lectus ut ligula
                        fringilla, eu euismod turpis pulvinar.
                        Vestibulum eget urna ac dolor consequat
                        aliquam.
                      </p>
                    </div>
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