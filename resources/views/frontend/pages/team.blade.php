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
          	<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Team <i class="fa fa-chevron-right"></i></span></p>
            <h1 class="mb-0 bread">Experts Staff</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Team &amp; Staff</span>
            <h2>Our Experts About TechSolve Repair</h2>
          </div>
        </div>
			<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('assets/img/staff-1.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Lloyd Wilson</h3>
								<span class="position mb-2">Mechanics</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"></span></a></li>

		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('assets/img/staff-2.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Rachel Parker</h3>
								<span class="position mb-2">painter</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"></span></a></li>

		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('assets/img/staff-3.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Ian Smith</h3>
								<span class="position mb-2">plumber</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('assets/img/staff-4.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Alicia Henderson</h3>
								<span class="position mb-2">Solar Installer</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>

					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('assets/img/staff-5.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Lloyd Wilson</h3>
								<span class="position mb-2">Door Installer</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('assets/img/staff-6.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Rachel Parker</h3>
								<span class="position mb-2">Mechanics</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('assets/img/staff-7.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Ian Smith</h3>
								<span class="position mb-2">Phone Repairer</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url({{ asset('assets/img/staff-9.jpg') }});"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3>Fred Henderson</h3>
								<span class="position mb-2">Computer Repairer</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"></span></a></li>
		              </ul>
	                </div>
						</div>
					</div>
				</div>
                <div class="row mt-5 ">
                    <div class="col text-center" style="margin-left: 30vw;">
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
