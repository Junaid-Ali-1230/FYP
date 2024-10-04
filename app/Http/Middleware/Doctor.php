<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class Doctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is logged in as a doctor
        if (!Auth::guard('doctor')->check()) {
            return redirect()->route('login_from')->with('error', 'Please login first!');
        }

        // Retrieve the currently authenticated doctor
        $doctor = Auth::guard('doctor')->user();

        // Check the doctor's status
        if ($doctor->status == 0) {
            return redirect()->route('doctor.not_approved')->with('error', 'Your ID is not approved yet!');
        }

        return $next($request);
    }
}
