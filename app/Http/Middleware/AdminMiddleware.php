<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $role = Role::where('name', 'admin')->first();
        if (!$user->roles()->where('role_id', $role->id)->exists()) {
            return redirect()->route('admin.showLoginForm')->with('error', 'You are not authorized to access this page.');
        }
        else{
            return $next($request);
        }

    }
}