<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TechSolve A web app connecting users and technicians in a local area </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.timepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>
  <body>


    @include('frontend.body.header')


 <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/img/plumber_1.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-end">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Services <i class="fa fa-chevron-right"></i></span></p>
        </div>
      </div>
    </div>
  </section>


  <section class="ftco-section">
      <div class="container">
          <div class="row justify-content-center pb-5 mb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
            <span class="subheading">We offer Services</span>
          <h2>Our services</h2>
        </div>
      </div>
          <div class="row">
        <div class="col-md-4 services ftco-animate">
          <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-car-service"></span>
            </div>
            <div class="media-body pl-3">
              <h3 class="heading">Leaky faucet or a burst pipe</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
          </div>
          <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-tyre"></span>
            </div>
            <div class="media-body pl-3">
              <h3 class="heading">Car and Bike Repairs</h3>
              <p>Our automotive experts are here to help. Whether it's routine maintenance or major repairs, TechSolve connects you with skilled mechanics who will get you back on the road in no time. Drive with confidence, thanks to TechSolve!</p>
              <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
          </div>

        </div>
        <div class="col-md-4 services ftco-animate">
          <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-battery"></span>
            </div>
            <div class="media-body pl-3">
              <h3 class="heading">Electronic Repairs</h3>
              <p>Struggling with malfunctioning electronics? Whether it's your TV, stereo, or any other electronic device, our skilled technicians have the expertise to diagnose and fix the problem swiftly. Get your electronics running smoothly with TechSolve.</p>
              <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
          </div>
          <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-car-engine"></span>
            </div>
            <div class="media-body pl-3">
              <h3 class="heading">Computer and Phone Repairs</h3>
              <p>TechSolve offers top-notch repair services for all your gadgets. From software issues to hardware fixes, our technicians have got you covered. Stay connected with TechSolve.</p>
              <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-4 services ftco-animate">
          <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-tow-truck"></span>
            </div>
            <div class="media-body pl-3">
              <h3 class="heading">Door Lock Fitting</h3>
              <p>Security is our priority. Our experienced locksmiths provide reliable and efficient door lock fitting and repair services, ensuring your home or office remains secure. Trust TechSolve for all your locksmith needs.</p>
              <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
          </div>
          <div class="d-block d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
                  <span class="flaticon-repair"></span>
            </div>
            <div class="media-body pl-3">
              <h3 class="heading">Air Conditioning repair and Maintenance</h3>
              <p>We Provide professional Heating & Cooling Services.</p>
              <p><a href="#" class="btn-custom">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
      </div>
  </section>


  @include('frontend.body.footer')



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#001"/></svg></div>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>

  </body>
</html>
