<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnsureTokenIsExist
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Retrieve the session token
        $sessionToken = Session::get('token');

        // Check the token existance
        if (!$sessionToken) {
            return redirect('/')->withErrors(['error' => 'Session expired. Please log in again.']);
        }

        return $next($request);
    }
}
