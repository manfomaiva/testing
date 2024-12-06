<?php

// app/Http/Controllers/RegisterController.php
// app/Http/Controllers/RegisterController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user', 
        ]);

        event(new Registered($user));

        Auth::login($user);

        return $this->redirectToDashboard($user);
    }

    protected function redirectToDashboard($user)
    {
        if ($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role == 'technician') {
            return redirect()->route('technician.dashboard');
        } elseif ($user->role == 'user') {
            return redirect()->route('frontend.index');
        } else {
            return redirect()->route('home');
        }
    }
}
