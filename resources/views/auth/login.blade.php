<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1 class="text-center">Login</h1>
        <div class="input-box">
            <i class="bx bxs-envelope"></i>
            <input type="text" class="form-control" name="login" placeholder="Email or Username or Phone" required>
        </div>
        <div class="input-box">
            <i class="bx bxs-lock-alt"></i>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
            <label class="form-check-label" for="rememberMe">Remember Me</label>
            <a href="#" class="float-right">Forgot Password</a>
        </div>
        <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
        <div class="register-link mt-2">
            <p>Don't have an account? <a href="{{ route('register') }}" style="color: blue">Sign Up here</a></p>
        </div>
    </form>
</x-guest-layout>
