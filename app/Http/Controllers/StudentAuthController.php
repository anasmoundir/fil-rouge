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
      // public function showLoginForm(): View
      public function showLoginForm()
      {
          return view('auth.student.login');
      }

      public function login(Request $request)
      {
          $credentials = $request->only('email', 'password');
          if (Auth::attempt($credentials)) {
              return redirect()->intended('dashboard');
          }
      }



      //show registration form
        public function showRegistrationForm()
        {
            return view('auth.student.register');
        }


        //register new user and save to database with the role of student  fill the table of student in the same function 
        public function register(Request $request)
        {
            dd($request);
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|confirmed|min:8',
                'first_name' => 'required|string|max:255',
                  'last_name' => 'required|string|max:255',
                  'date_of_birth' => 'required|string|max:255',
                  'address' => 'required|string|max:255',
                  'enrollement_date' => 'required|string|max:255',

            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
                'role' => 'student',
            ]);

            $student = Student::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'date_of_birth' => $request->date_of_birth,
              'address' => $request->address,
              'enrollement_date' => $request->enrollement_date,
              'user_id' => $user->id,
          ]);

            $student->user()->associate($user);
            $user->save();
            $student->save();
            auth()->login($user);

            return redirect()->route('student');

        }
    
}
