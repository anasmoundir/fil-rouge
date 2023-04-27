<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Instructor;

class InstructorMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $instructor = Instructor::where('user_id', $user->id)->first();

        if (!$instructor || !$instructor->id) {
            return redirect()->route('welcome')->with('error', 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}