<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <h1 class="text-center fs-20">Register</h1>
        <div class="input-box">
            <i class="bx bxs-user"></i>
            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
        </div>
        <div class="input-box">
            <i class="bx bxs-envelope"></i>
            <input type="email" class="form-control" name="email" placeholder="Email" required>
        </div>
        <div class="input-box">
            <i class="bx bxs-lock-alt"></i>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="input-box">
            <i class="bx bxs-lock-alt"></i>
            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
        </div>

        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
        <div class="terms-policy-link mt-3">
            <p>By clicking the register button, you agree to our <br> <a href="#" style="color: blue">Terms and Conditions</a> and <a href="#" style="color: blue">Policies</a></p>
        </div>
        <div class="register-link mt-2">
            <p>Already have an account? <a href="{{ route('login') }}" style="color: blue">Login here</a></p>
        </div>
    </form>
</x-guest-layout>
