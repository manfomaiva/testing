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
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Contact us</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="wrapper">
							<div class="row no-gutters">
								<div class="col-md-7 d-flex">
									<div class="contact-wrap w-100 p-md-5 p-4">
										<h3 class="mb-4">Get in touch</h3>
										<form action="https://formspree.io/f/xzzprkqe" method="POST" class="appointment">
                                            <div class="row">
                                             <div class="col-md-12">
                                              <div class="form-group">
                                               <div class="form-field">
                                                <div class="select-wrap">
                                                 <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                 <select name="service" id="service" class="form-control">
                                                  <option value="">Select services</option>
                                                  <option value="Plumbering">Plumbering</option>
                                                  <option value="Electronic Repairs">Electronic Repairs</option>
                                                  <option value="Door Lock Fitting">Door Lock Fitting</option>
                                                  <option value="Car and Bike Repairs">Car and Bike Repairs</option>
                                                  <option value="Computer and Phone Repairs">Computer and Phone Repairs</option>
                                                  <option value="Air Conditioning repair and Maintenance">Air Conditioning repair and Maintenance</option>
                                                  <option value="Other Services">Other Services</option>
                                                 </select>
                                                </div>
                                               </div>
                                              </div>
                                             </div>
                                             <div class="col-md-6">
                                              <div class="form-group">
                                               <input type="text" name="name" class="form-control" placeholder="Your Name">
                                              </div>
                                             </div>
                                             <div class="col-md-6">
                                              <div class="form-group">
                                               <input type="text" name="location" class="form-control" placeholder="Your Location">
                                              </div>
                                             </div>
                                             <div class="col-md-6">
                                              <div class="form-group">
                                               <div class="input-wrap">
                                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                                <input type="text" name="date" class="form-control appointment_date" placeholder="Date">
                                               </div>
                                              </div>
                                             </div>
                                             <div class="col-md-6">
                                              <div class="form-group">
                                               <div class="input-wrap">
                                                <div class="icon"><span class="fa fa-clock-o"></span></div>
                                                <input type="text" name="time" class="form-control appointment_time" placeholder="Time">
                                               </div>
                                              </div>
                                             </div>
                                             <div class="col-md-12">
                                              <div class="form-group">
                                               <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                              </div>
                                             </div>
                                             <div class="col-md-12">
                                              <div class="form-group">
                                               <input type="submit" value="Send message" class="btn btn-light py-3 px-4">
                                              </div>
                                             </div>
                                            </div>
                                           </form>
									</div>
								</div>
								<div class="col-md-5 d-flex align-items-stretch">
									<div class="info-wrap bg-primary w-100 p-lg-5 p-4">
										<h3 class="mb-4 mt-md-4">Contact us</h3>
					        	<div class="dbox w-100 d-flex align-items-start">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-map-marker"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Address:</span> North-West Region, Bamenda City</p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-phone"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Phone:</span> <a href="tel://1234567920">+237 650 423 184</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-paper-plane"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Email:</span> <a href="mailto:info@yoursite.com">jannetperroni@gmail.com</a></p>
						          </div>
					          </div>
					        	<div class="dbox w-100 d-flex align-items-center">
					        		<div class="icon d-flex align-items-center justify-content-center">
					        			<span class="fa fa-globe"></span>
					        		</div>
					        		<div class="text pl-3">
						            <p><span>Website</span> <a href="#">manfo.com</a></p>
						          </div>
					          </div>
				          </div>
								</div>
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
