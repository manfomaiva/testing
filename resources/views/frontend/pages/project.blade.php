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

    <!-- END nav -->
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('assets/img/plumber_1.jpg') }}');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Projects <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread font-weight-bolder">Our Works</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Projects</span>
            <h2>Done Projects</h2>
          </div>
        </div>
			</div>
			<div class="container">
				<div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('assets/img/CarRepair_1.jpg') }});">
            	<a href="{{ asset('assets/img/CarRepair_1.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tire</span>
	              	<h2><a href="work-single.html">Tire Testing Complated</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('assets/img/CarRepair_2.jpg') }});">
            	<a href="{{ asset('assets/img/CarRepair_2.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Oil Change</span>
	              	<h2><a href="work-single.html">Change Oil Completed</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('assets/img/ComputerRepair_0.jpg') }});">
            	<a href="{{ asset('assets/img/ComputerRepair_0.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span></span>
	              	<h2><a href="work-single.html">Engine Diagnostics</a></h2>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('assets/img/Aircondition_5.jpg') }});">
            	<a href="{{ asset('assets/img/Aircondition_5.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tire</span>
	              	<h2><a href="work-single.html">Tire Change</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('assets/img/BikeTireRepair_7.jpg') }});">
            	<a href="{{ asset('assets/img/BikeTireRepair_7.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tire</span>
	              	<h2><a href="work-single.html">Bicycle Tire Change</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('assets/img/DoorInstaller_1.jpg') }});">
            	<a href="{{ asset('assets/img/DoorInstaller_1.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tire</span>
	              	<h2><a href="work-single.html">Door Installation/a></h2>
	              </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('assets/img/energy\ repairer.jpeg') }});">
            	<a href="{{ asset('assets/img/energy\ repairer.jpeg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tire</span>
	              	<h2><a href="work-single.html">Light Installation</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('assets/img/EnergySwitchRepair_1.jpg') }});">
            	<a href="{{ asset('assets/img/EnergySwitchRepair_1.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tire</span>
	              	<h2><a href="work-single.html">Switch Change</a></h2>
	              </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="work mb-4 img d-flex align-items-end" style="background-image: url({{ asset('assets/img/PhoneRepair_0.jpg') }});">
            	<a href="{{ asset('assets/img/PhoneRepair_0.jpg') }}" class="icon image-popup d-flex justify-content-center align-items-center">
	    					<span class="fa fa-expand"></span>
	    				</a>
            	<div class="desc w-100 px-4">
	              <div class="text w-100 mb-3">
	              	<span>Tire</span>
	              	<h2><a href="work-single.html">Phone Repair</a></h2>
	              </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
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
