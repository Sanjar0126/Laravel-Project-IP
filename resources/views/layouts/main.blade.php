<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{asset('img/logo.png')}}" />
        <link
            rel="stylesheet"
            href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}"
        />
        <!-- Fonts -->
        <link rel="stylesheet" href="{{asset('css/fonts.css')}}" />
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
        <!-- owl-carousel -->
        <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
        <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}" />

        <link rel="stylesheet" href="{{asset('css/style.css')}}" />
        <!-- slick -->
        <link rel="stylesheet" href="{{asset('css/slick.css')}}" />
        <link rel="stylesheet" href="{{asset('css/slick-theme.css')}}" />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
        />
        <!-- MAIN CSS -->
        <link rel="stylesheet" href="{{asset('css/main.css')}}" />
        <link rel="stylesheet" href="{{asset('css/media.css')}}" />
    </head>
    <body class="menuCanvas">
    
    @yield('content')
    <!-- Scripts -->
    <!-- jquery -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <!-- owl-carousel -->
    <script>
      $(document).ready(function () {
        var owl = $(".owl-carousel").owlCarousel({
          loop: true,
          items: 1,
          nav: true,
          dots: true,
          navText: [
            "<i class='fa fa-chevron-left' aria-hidden='true'></i>",
            "<i class='fa fa-chevron-right' aria-hidden='true'></i>",
          ],
          autoplay: 2000,
          animateOut: "fadeOutLeft",
          animateIn: "fadeInRight",
          responsive: {
            500: {
              mouseDrag: false,
              touchDrag: true,
            },
            1200: {
              mouseDrag: true,
              touchDrag: false,
            },
          },
        });
      });
    </script>
    <!-- slick -->
    <script src="{{asset('js/slick.min.js')}}"></script>

    <script>
      $(document).ready(function () {
        $(".slider-for").slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          speed: 500,
          fade: true,
          asNavFor: ".slider-nav",
        });

        $(".slider-nav").slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          prevArrow:
            '<img src="img/left-arrow-angle.svg" alt="" class="left-arrow" >',
          nextArrow:
            '<img src="img/right-arrow-angle.svg" alt="" class="right-arrow" >',
          centerMode: true,
          centerPadding: "15px",
          focusOnSelect: true,
          asNavFor: ".slider-for",
          // autoplay: true,
          // autoplaySpeed: 5000,
          responsive: [
            {
              breakpoint: 768,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
              },
            },
            {
              breakpoint: 495,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
              },
            },
          ],
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        $(".recallSlider").slick({
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: true,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 991,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
              },
            },
          ],
        });
      });
    </script>
    <script>
      $(function () {
        var menuToggler = $(".menu-icon"),
          menu = $(".sidebar"),
          menubg = $(".menuCanvas"),
          exit = $("#exitmnu");

        menuToggler.click(function (e) {
          e.preventDefault();
          e.stopPropagation();

          $(this).toggleClass("active");
          menu.toggleClass("active");
          menubg.toggleClass("active");
          exit.toggleClass("active");
        });

        menu.click(function (e) {
          e.stopPropagation();
        });

        $(document).click(function (e) {
          if (!menu.has(e.target).length) {
            menu.removeClass("active");
            menuToggler.removeClass("active");
            menubg.removeClass("active");
            exit.removeClass("active");
          }
        });
      });
    </script>
    <script src="{{asset('js/slick-animate.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>
    <script>
      new WOW().init();
    </script>
    <script src="{{asset('js/ajaxDelet.js')}}"></script>
  </body>
</html>
