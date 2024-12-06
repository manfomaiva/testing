<?php

// app/Http/Controllers/LoginController.php

// app/Http/Controllers/LoginController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email/name/phone' => 'required|login',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return $this->authenticated($request, Auth::user());
        }

        return redirect()->back()->withErrors(['email' => 'Invalid login credentials']);
    }

    protected function authenticated(Request $request, $user)
    {
        if ($user->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif ($user->role == 'technician') {
            return redirect()->route('technician.dashboard');
        } elseif ($user->role == 'user') {
            return redirect()->route('user.frontend.index');
        } else {
            return redirect()->route('home');
        }
    }
}
