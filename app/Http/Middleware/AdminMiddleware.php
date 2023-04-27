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
        //user role_user rolename =admin
        $role = Role::where('name', 'admin')->first();
        $user_role = $user->roles()->first();
        if (!$user_role || $user_role->id != $role->id) {
            return redirect()->route('welcome')->with('error', 'You are not authorized to access this page.');
        }

        return $next($request);
    }
}