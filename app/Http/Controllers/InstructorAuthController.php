<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorAuthController extends Controller
{
      public function showLoginForm()
      {
          return view('auth.instructor.login');
      }
      public function login(Request $request)
      {
          $credentials = $request->only('email', 'password');
          if (Auth::attempt($credentials)) {
              return redirect()->intended('instructor');
          }
      }
      public function showRegistrationForm()
      {
              return view('auth.instructor.register');
      }
    
      
}
