@extends('layouts/main')
@section('content')
    <div class="wrap">
      
      @include('partials/navbar')
      <!-- AboutUs Start -->
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
                      <img src="img/baraka1.png" alt="" />
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
                        Find more reasons to love life in Uzbekistan visiting To
                        «Giordino», let the local sunrises and sunsets,
                        delicious food and incredibly nice people enchant you.
                      </p>
                      <p>
                        Great service, good food and the gorgeous views to the
                        port will make your visit unforgettable, while the
                        amiable climate will only add to the overall atmosphere.
                      </p>
                    </div>
                    <div
                      class="companyAboutContentRight wow fadeInDown"
                      data-wow-duration="2s"
                      data-wow-delay="1s"
                    >
                      <p>
                        Get to know the local hospitality, sunshine and a nice
                        chat with locals, who always have a lot to tell about
                        their history, culture and tranquil lifestyle.
                      </p>
                      <p>
                        During sunset, surrender to the dramatic views of the
                        caldera, the deep blue Aegean sea and treat yourself
                        with a glass of divine whine from local vineyards.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- AboutUs End -->

    
      @include('partials/footer')
    </div>
    @endsection   