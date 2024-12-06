<?php

// app/Http/Middleware/Role.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    public function handle(Request $request, Closure $next, $role): Response
    {
        if ($request->user()->role !== $role) {
            return redirect()->route('frontend.index');
        }

        return $next($request);
    }
}
