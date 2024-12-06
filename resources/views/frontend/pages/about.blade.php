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
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">About Us</h1>
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

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-light">
    	<div class="container">
    		<div class="row d-flex no-gutters">
    			<div class="col-md-6 d-flex">
    				<div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0" style="background-image:url({{ asset('assets/img/BikeTireRepair_7.jpg') }});">
    					<a href="{{ asset('assets/img/PhoneRepairVideo.mp4') }}" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="fa fa-play"></span>
    					</a>
    				</div>
    			</div>
    			<div class="col-md-6 pl-md-5">
    				<div class="row justify-content-start py-5">
		          <div class="col-md-12 heading-section ftco-animate">
		          	<span class="subheading">Welcome to TechSolve</span>
		            <h2 class="mb-4">We want to serve everyone around us by putting smiles on their faces</h2>
		            <p>People choose TechSolve for its expert technicians, user-friendly platform, and commitment to customer satisfaction. Our certified professionals provide top-quality service across a wide range of technical needs, while our easy booking system and real-time tracking ensure a seamless experience. With competitive, transparent pricing and reliable support, TechSolve consistently earns positive reviews and prioritizes customer convenience and security.</p>
		            <div class="tabulation-2 mt-4">
									<ul class="nav nav-pills nav-fill d-md-flex d-block">
									  <li class="nav-item mb-md-0 mb-2">
									    <a class="nav-link active py-2" data-toggle="tab" href="./about.html">Our Mission</a>
									  </li>
									  <li class="nav-item px-lg-2 mb-md-0 mb-2">
									    <a class="nav-link py-2" data-toggle="tab" href="#home2">Our Vision</a>
									  </li>
									  <li class="nav-item">
									    <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab" href="#home3">Our Value</a>
									  </li>
									</ul>
									<div class="tab-content rounded mt-2">
									  <div class="tab-pane container p-0 active" id="home1">
									  	<p>To provide users with easy access to professional technicians for a wide range of repair and maintenance services. We aim to deliver quick, reliable, and high-quality solutions, ensuring customer satisfaction and building a trusted network of experts to address all your technical needs efficiently.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home2">
									  	<p>To be the leading platform that seamlessly connects users with skilled technicians across diverse fields, fostering a community of trust and excellence. Our goal is to revolutionize repair services, ensuring every user experiences quick, reliable, and high-quality solutions for their maintenance needs.</p>
									  </div>
									  <div class="tab-pane container p-0 fade" id="home3">
									  	<p>TechSolve is your go-to platform for connecting with expert technicians across various fields, including plumbing, electronics, computers, phones, door locks, cars, and bikes. It offers quick, reliable, and professional repair services, ensuring your issues are resolved efficiently. With TechSolve, you gain access to a network of certified professionals who provide top-notch solutions, making your life easier and more secure.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section class="ftco-counter" id="section-counter">
    	<div class="container">
				<div class="row">
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="45">0</strong>
              </div>
              <div class="text">
              	<span>Years of Experienced</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="8500">0</strong>
              </div>
              <div class="text">
              	<span>Project completed</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="2342">0</strong>
              </div>
              <div class="text">
              	<span>Happy Customers</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="30">0</strong>
              </div>
              <div class="text">
              	<span>Award Winning</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>

		<section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img" style="background-image: url({{ asset('assets/img/plumber_1.jpg') }});">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
    				<span class="subheading">Booking an Appointment</span>
    				<h2 class="mb-4">Free Consultation</h2>
    				<form action="hhttps://formspree.io/f/xzzprkqe" method="POST" class="appointment">
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
