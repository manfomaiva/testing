<x-app-layout>
    <x-slot name="header">

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <title>TechSolve A web app connecting users and technicians in a local area </title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap"
                rel="stylesheet">

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
            <div class="wrap ">
                <div class="container">
                    <div class="row  justify-content-between">
                        <div class="col-md-3 d-flex align-items-center">
                            <a class="navbar-brand" href="index.html">TechSolve<span>.</span></a>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <p> Want to provide your services to your community? No worries Contact Us</p>
                                <div class="col">
                                    <div class="top-wrap d-flex">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-location-arrow"></span></div>
                                        <div class="text"><span>Address</span><span> Bamenda city</span></div>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="top-wrap d-flex">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="fa fa-location-arrow"></span></div>
                                        <div class="text"><span>Call us</span><span>(+237)650 423 184</span></div>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex justify-content-end align-items-center">
                                    <div class="social-media">
                                        <p class="mb-0 d-flex">
                                            <a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-whatsapp"><i class="sr-only">whatsapp</i></span></a>
                                            <a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                            <a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                            <a href="#"
                                                class="d-flex align-items-center justify-content-center"><span
                                                    class="fa fa-linkedin"><i class="sr-only">linkedin</i></span></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                <div class="container">

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span> Menu
                    </button>
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
                                                <option value="Computer and Phone Repairs">Computer and Phone Repairs
                                                </option>
                                                <option value="Air Conditioning repair and Maintenance">Air Conditioning
                                                    repair and Maintenance</option>
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
                                    <input type="text" name="location" class="form-control"
                                        placeholder="Your Location">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-calendar"></span></div>
                                        <input type="text" name="date" class="form-control appointment_date"
                                            placeholder="Date">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon"><span class="fa fa-clock-o"></span></div>
                                        <input type="text" name="time" class="form-control appointment_time"
                                            placeholder="Time">
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
                    <div class="collapse navbar-collapse" id="ftco-nav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a href="{{ url('/index') }}" class="nav-link">Home</a></li>
                            <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                            <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a>
                            </li>
                            <li class="nav-item"><a href="{{ url('/project') }}" class="nav-link">Projects</a></li>
                            <li class="nav-item"><a href="{{ url('/team') }}" class="nav-link">Team</a></li>
                            <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                            <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link">SignUp</a></li>
                            <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- END nav -->
            <div class="hero-wrap">
                <div class="home-slider owl-carousel">
                    <div class="slider-item"
                        style="background-image:url({{ asset('assets/img/StereoRepairChannel_1.jpg') }});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row no-gutters slider-text align-items-center justify-content-start">
                                <div class="row-md-6 ftco-animate">
                                    <div class="text w-100">
                                        <h1>TechSolve</h1>
                                        <h2 class="mb-4">
                                            A website where expert technicians from different field domains offer their
                                            services to the community around them </h2>
                                        <p><a href="https://wa.me/237650423184" class="btn btn-secondary">Book an
                                                appointment</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-item" style="background-image:url({{ asset('assets/img/plumber_1.jpg') }});">
                        <div class="overlay"></div>
                        <div class="container">
                            <div class="row no-gutters slider-text align-items-center justify-content-start">
                                <div class="row-md-6 ftco-animate">
                                    <div class="text w-100">
                                        <h1>It's time to get your broken pieces fix</h1>
                                        <h2 class="mb-4">We care about your broken Piece</h2>
                                        <p><a href="https://wa.me/237650423184" class="btn btn-secondary">Book an
                                                appointment</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="intro">
                <div class="container intro-wrap">
                    <div class="row no-gutters">
                        <div class="col-md-12 col-lg-9 bg-intro d-sm-flex align-items-center align-items-stretch">
                            <div class="intro-box d-flex align-items-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <i class="flaticon-repair"></i>
                                </div>
                                <h2 class="mb-0">Are you ready? <span>Let's repair it now!</span></h2>
                            </div>
                            <a href="https://wa.me/237650423184"
                                class="bg-primary btn-custom d-flex align-items-center fw-bold"><span>Book an
                                    Appointment</span></a>
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
                                    <span class="flaticon-repair"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Leaky faucet or a burst pipe</h3>
                                    <p>Even the all-powerful Pointing has no control about the blind texts it is an
                                        almost unorthographic.</p>
                                    <p><a href="#" class="btn-custom">Read more</a></p>
                                </div>
                            </div>
                            <div class="d-block d-flex">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="material-symbols-outlined"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Car and Bike Repairs</h3>
                                    <p>Our automotive experts are here to help. Whether it's routine maintenance or
                                        major repairs, TechSolve connects you with skilled mechanics who will get you
                                        back on the road in no time. Drive with confidence, thanks to TechSolve!</p>
                                    <p><a href="#" class="btn-custom">Read more</a></p>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4 services ftco-animate">
                            <div class="d-block d-flex">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="material-symbols-outlined"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Electronic Repairs</h3>
                                    <p>Struggling with malfunctioning electronics? Whether it's your TV, stereo, or any
                                        other electronic device, our skilled technicians have the expertise to diagnose
                                        and fix the problem swiftly. Get your electronics running smoothly with
                                        TechSolve.</p>
                                    <p><a href="#" class="btn-custom">Read more</a></p>
                                </div>
                            </div>
                            <div class="d-block d-flex">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="material-symbols-outlined"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Computer and Phone Repairs</h3>
                                    <p>TechSolve offers top-notch repair services for all your gadgets. From software
                                        issues to hardware fixes, our technicians have got you covered. Stay connected
                                        with TechSolve.</p>
                                    <p><a href="#" class="btn-custom">Read more</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4 services ftco-animate">
                            <div class="d-block d-flex">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="material-symbols-outlined"></span>
                                </div>
                                <div class="media-body pl-3">
                                    <h3 class="heading">Door Lock Fitting</h3>
                                    <p>Security is our priority. Our experienced locksmiths provide reliable and
                                        efficient door lock fitting and repair services, ensuring your home or office
                                        remains secure. Trust TechSolve for all your locksmith needs.</p>
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
                            <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center mb-4 mb-sm-0"
                                style="background-image:url({{ asset('assets/img/BikeTireRepair_7.jpg') }});">
                                <a href="{{ asset('assets/img/PhoneRepairVideo.mp4') }}"
                                    class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                    <span class="fa fa-play"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5">
                            <div class="row justify-content-start py-5">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Welcome to TechSolve</span>
                                    <h2 class="mb-4">We want to serve everyone around us by putting smiles on their
                                        faces</h2>
                                    <p>People choose TechSolve for its expert technicians, user-friendly platform, and
                                        commitment to customer satisfaction. Our certified professionals provide
                                        top-quality service across a wide range of technical needs, while our easy
                                        booking system and real-time tracking ensure a seamless experience. With
                                        competitive, transparent pricing and reliable support, TechSolve consistently
                                        earns positive reviews and prioritizes customer convenience and security.</p>
                                    <div class="tabulation-2 mt-4">
                                        <ul class="nav nav-pills nav-fill d-md-flex d-block">
                                            <li class="nav-item mb-md-0 mb-2">
                                                <a class="nav-link active py-2" data-toggle="tab"
                                                    href="./about.html">Our Mission</a>
                                            </li>
                                            <li class="nav-item px-lg-2 mb-md-0 mb-2">
                                                <a class="nav-link py-2" data-toggle="tab" href="#home2">Our
                                                    Vision</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link py-2 mb-md-0 mb-2" data-toggle="tab"
                                                    href="#home3">Our Value</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content rounded mt-2">
                                            <div class="tab-pane container p-0 active" id="home1">
                                                <p>To provide users with easy access to professional technicians for a
                                                    wide range of repair and maintenance services. We aim to deliver
                                                    quick, reliable, and high-quality solutions, ensuring customer
                                                    satisfaction and building a trusted network of experts to address
                                                    all your technical needs efficiently.</p>
                                            </div>
                                            <div class="tab-pane container p-0 fade" id="home2">
                                                <p>To be the leading platform that seamlessly connects users with
                                                    skilled technicians across diverse fields, fostering a community of
                                                    trust and excellence. Our goal is to revolutionize repair services,
                                                    ensuring every user experiences quick, reliable, and high-quality
                                                    solutions for their maintenance needs.</p>
                                            </div>
                                            <div class="tab-pane container p-0 fade" id="home3">
                                                <p>TechSolve is your go-to platform for connecting with expert
                                                    technicians across various fields, including plumbing, electronics,
                                                    computers, phones, door locks, cars, and bikes. It offers quick,
                                                    reliable, and professional repair services, ensuring your issues are
                                                    resolved efficiently. With TechSolve, you gain access to a network
                                                    of certified professionals who provide top-notch solutions, making
                                                    your life easier and more secure.</p>
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

            <section class="ftco-appointment ftco-section ftco-no-pt ftco-no-pb img"
                style="background-image: url({{ asset('assets/img/plumber_1.jpg') }});">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row d-md-flex justify-content-end">
                        <div
                            class="col-md-12 col-lg-6 half p-3 py-5 pl-lg-5 ftco-animate heading-section heading-section-white">
                            <span class="subheading">Booking an Appointment</span>
                            <h2 class="mb-4">Free Consultation</h2>
                            <form action="#" class="appointment">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="form-field">
                                                <div class="select-wrap">
                                                    <div class="icon"><span class="fa fa-chevron-down"></span></div>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Select services</option>
                                                        <option value="">Plumbering</option>
                                                        <option value="">Electronic Repairs</option>
                                                        <option value="">Door Lock Fitting</option>
                                                        <option value="">Car and Bike Repairs</option>
                                                        <option value="">Computer and Phone Repairs</option>
                                                        <option value="">Air Conditioning repair and Maintenance
                                                        </option>
                                                        <option value="">Other Services</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Your Location">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-wrap">
                                                <div class="icon"><span class="fa fa-calendar"></span></div>
                                                <input type="text" class="form-control appointment_date"
                                                    placeholder="Date">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-wrap">
                                                <div class="icon"><span class="fa fa-clock-o"></span></div>
                                                <input type="text" class="form-control appointment_time"
                                                    placeholder="Time">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Send message"
                                                class="btn btn-light py-3 px-4">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section">
                <div class="container">
                    <div class="row justify-content-center pb-5 mb-3">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <span class="subheading">News &amp; Blog</span>
                            <h2>Latest Services offer, from our blog</h2>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20 rounded"
                                    style="background-image: url({{ asset('assets/img/Aircondition_5.jpg') }});">
                                </a>
                                <div class="text mt-3">
                                    <div class="posted mb-3 d-flex">
                                        <div class="img author"
                                            style="background-image: url({{ asset('assets/img/Aircondition_5.jpg') }});">
                                        </div>
                                        <div class="desc pl-3">
                                            <span>Posted by John doe</span>
                                            <span>24 February 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="#">Best wheel alignment &amp; air
                                            conditioning</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20 rounded"
                                    style="background-image: url('{{ asset('assets/img/CaeRepair_7.jpg') }}');">
                                </a>
                                <div class="text mt-3">
                                    <div class="posted mb-3 d-flex">
                                        <div class="img author"
                                            style="background-image: url({{ asset('assets/img/CaeRepair_7.jpg') }});">
                                        </div>
                                        <div class="desc pl-3">
                                            <span>Posted by John doe</span>
                                            <span>24 February 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="#">Best wheel alignment &amp; air
                                            conditioning</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-flex ftco-animate">
                            <div class="blog-entry align-self-stretch">
                                <a href="blog-single.html" class="block-20 rounded"
                                    style="background-image: url('{{ asset('assets/img/CarRepair_0.jpg') }}');">
                                </a>
                                <div class="text mt-3">
                                    <div class="posted mb-3 d-flex">
                                        <div class="img author"
                                            style="background-image: url({{ asset('assets/img/CarRepair_0.jpg') }});">
                                        </div>
                                        <div class="desc pl-3">
                                            <span>Posted by John doe</span>
                                            <span>24 February 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="heading"><a href="#">Best wheel alignment &amp; air
                                            conditioning</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="ftco-section ftco-no-pb">
                <div class="container">
                    <div class="row justify-content-center pb-5 mb-3">
                        <div class="col-md-7 heading-section text-center ftco-animate">
                            <span class="subheading">Projects</span>
                            <h2>Done Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="container-fluid px-md-0">
                    <div class="row no-gutters">
                        <div class="col-md-3 ftco-animate">
                            <div class="work img d-flex align-items-end"
                                style="background-image: url({{ asset('assets/img/SolorPanel_1.jpg') }});">
                                <a href="{{ asset('assets/img/SolorPanel_1.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="fa fa-expand"></span>
                                </a>
                                <div class="desc w-100 px-4">
                                    <div class="text w-100 mb-3">
                                        <span>Solar</span>
                                        <h2><a href="work-single.html">Solar Panel installation</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ftco-animate">
                            <div class="work img d-flex align-items-end"
                                style="background-image: url({{ asset('assets/img/PhoneRepair_0.jpg') }});">
                                <a href="{{ asset('assets/img/PhoneRepair_0.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="fa fa-expand"></span>
                                </a>
                                <div class="desc w-100 px-4">
                                    <div class="text w-100 mb-3">
                                        <span>Motherboard Repair</span>
                                        <h2><a href="work-single.html">Motherboard Repair</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ftco-animate">
                            <div class="work img d-flex align-items-end"
                                style="background-image: url({{ asset('assets/img/CarRepair_2.jpg') }});">
                                <a href="{{ asset('assets/img/CarRepair_2.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
                                    <span class="fa fa-expand"></span>
                                </a>
                                <div class="desc w-100 px-4">
                                    <div class="text w-100 mb-3">
                                        <span>Engine</span>
                                        <h2><a href="work-single.html">Engine Diagnostics</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 ftco-animate">
                            <div class="work img d-flex align-items-end"
                                style="background-image: url({{ asset('assets/img/TireRepair_1.jpg') }});">
                                <a href="{{ asset('assets/img/TireRepair_1.jpg') }}"
                                    class="icon image-popup d-flex justify-content-center align-items-center">
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
                    </div>
                </div>
            </section>

            <footer class="footer ftco-section">
                <div class="container">
                    <div class="row mb-5">
                        <div class="col-md-6 col-lg">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="logo"><a href="#">TechSolve<span>.</span></a></h2>
                                <p>Putting a smile on your face is the TechSolve team first priority and goal.</p>
                                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-4">
                                    <li class="ftco-animate"><a href="#"><span
                                                class="fa fa-whatsapp"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span
                                                class="fa fa-twitter"></span></a></li>
                                    <li class="ftco-animate"><a href="#"><span
                                                class="fa fa-instagram"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg">
                            <div class="ftco-footer-widget mb-4 ml-md-5">
                                <h2 class="ftco-heading-2">Services</h2>
                                <ul class="list-unstyled">
                                    <option value="">Select services</option>
                                    <li><a href="#" class="py-1 d-block"><span
                                                class="fa fa-check mr-3"></span>Plumbering</a></li>
                                    <li><a href="#" class="py-1 d-block"><span
                                                class="fa fa-check mr-3"></span>Electronic Repairs</a></li>
                                    <li><a href="#" class="py-1 d-block"><span
                                                class="fa fa-check mr-3"></span>Door Lock Fitting</a></li>
                                    <li><a href="#" class="py-1 d-block"><span
                                                class="fa fa-check mr-3"></span>Car and Bike Repairs</a></li>
                                    <li><a href="#" class="py-1 d-block"><span
                                                class="fa fa-check mr-3"></span>Air Conditioning repair and
                                            Maintenance</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Contact information</h2>
                                <div class="block-23 mb-3">
                                    <ul>
                                        <li><span class="icon fa fa-map-marker"></span><span class="text"> Bamenda,
                                                North-West, Cameroon</span></li>
                                        <li><a href="#"><span class="icon fa fa-phone"></span><span
                                                    class="text">+237 650 423 184</span></a></li>
                                        <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                                                    class="text">jannetperroni@gmail.com</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg">
                            <div class="ftco-footer-widget mb-4">
                                <h2 class="ftco-heading-2">Business Hours</h2>
                                <div class="opening-hours">
                                    <h4>Opening Days:</h4>
                                    <p class="pl-3">
                                        <span>Monday – Friday : 9am to 18pm</span>
                                        <span>Saturday : 9am to 17pm</span>
                                    </p>
                                    <h4>Vacations:</h4>
                                    <p class="pl-3">
                                        <span>All Sunday Days</span>
                                        <span>All Official Holidays</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p class="text-muted mb-1 mb-md-0">Copyright © 2024 <a href="https://www.techsolve.com"
                                    target="_blank">TechSolve</a>.</p>
                            <p class="text-muted">TechSolve With <i class="mb-1 text-primary ms-1 icon-sm fa fa-heart"
                                    data-feather="heart"></i>
                            </p>
                        </div>
                    </div>
                </div>
            </footer>



            <!-- loader -->
            <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                        stroke="#eeeeee" />
                    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                        stroke-miterlimit="10" stroke="#001" />
                </svg></div>


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
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
            <script src="{{ asset('assets/js/google-map.js') }}"></script>
            <script src="{{ asset('assets/js/main.js') }}"></script>

        </body>

        </html>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>