<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SetUserType
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if it's an admin login form submission
        if ($request->is('admin/login')) {
            // Set session value for admin
            session(['user_type' => 1]);
        } else {
            // Set session value for regular user
            session(['user_type' => 2]);
        }

        return $next($request);
    }
}
