<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\Student;

class StudentAuthController extends Controller
{
      public function showLoginForm()
      {
          return view('auth.student.login');
      }

      public function login(Request $request)
      {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect()->intended('student');
        }  
      }

        public function showRegistrationForm()
        {
            return view('auth.student.register');
        }


        public function register(Request $request)
        {
           
        $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'date_of_birth' => 'required|string|max:255',
        'address' => 'nullable|string|max:255',
        'enrollement_date' => 'required|string|max:255',
        ]);

        $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => bcrypt($validatedData['password']),
        'role' => 'student',
        ]);

         $student = Student::create([
        'first_name' => $validatedData['first_name'],
        'last_name' => $validatedData['last_name'],
        'date_of_birth' => $validatedData['date_of_birth'],
        'address' => $validatedData['address'],
        'enrollement_date' => $validatedData['enrollement_date'],
        'user_id' => $user->id,
        ]);

        auth()->login($user);
        return redirect()->route('student');
        }
        public function showStudentPage()
        {
            return view('student');
         }
}
