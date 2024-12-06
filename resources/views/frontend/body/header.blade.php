<div class="wrap ">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-3 d-flex align-items-center">
                <a class="navbar-brand" href="{{ url('/index') }}">TechSolve<span>.</span></a>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <p> Want to provide your services to your community? No worries Contact Us</p>
                    <div class="col">
                        <div class="top-wrap d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
                            <div class="text"><span>Address</span><span> Bamenda city</span></div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="top-wrap d-flex">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-location-arrow"></span></div>
                            <div class="text"><span>Call us</span><span>(+237)650 423 184</span></div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-end align-items-center">
                        <div class="social-media">
                            <p class="mb-0 d-flex">
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-whatsapp"><i class="sr-only">whatsapp</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-linkedin"><i class="sr-only">linkedin</i></span></a>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Search">
                <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a href="{{ url('/index') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ url('/about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ url('/services') }}" class="nav-link">Services</a></li>
                <li class="nav-item"><a href="{{ url('/project') }}" class="nav-link">Projects</a></li>
                <li class="nav-item"><a href="{{ url('/team') }}" class="nav-link">Team</a></li>
                <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{ url('/register') }}" class="nav-link">Register</a></li>
                <li class="nav-item"><a href="{{ url('/login') }}" class="nav-link">Login</a></li>
            </ul>
        </div>

    </div>
</nav>
