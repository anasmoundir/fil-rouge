<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\Student;

class StudentMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $student = Student::where('user_id', $user->id)->first();

        if (!$student) {
            return redirect()->route('student.showLoginForm')->with('error', 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}