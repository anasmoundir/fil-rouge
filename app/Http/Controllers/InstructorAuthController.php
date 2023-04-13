<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;


class InstructorAuthController extends Controller
{
      public function showLoginForm()
      {
          return view('auth.instructor.login');
      }
      public function login(Request $request)
      {
          $credentials = $request->only('email', 'password');
        //   check if the user is an instructor to be approved it should be 1
        //the condition is not working
            if (Auth::guard('instructor')->attempt($credentials) && Auth::guard('instructor')->user()->approved == 1) 
            {
                return redirect()->intended('instructor');
            }
            else
            {
                return redirect()->back()->with('error', 'You are not approved yet');
            }
        }
      public function showRegistrationForm()
      {
                $roles = Role::all();
              return view('auth.instructor.register')->with('roles', $roles);
      }
      

      public function register(Request $request)
    {
    $request->validate([
        'name' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'date_of_birth' => 'required',
        'address' => 'required',
        'teaching_experience' => 'required',
        'field_of_expertise' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'cv' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);

    $image = $request->file('image');
    $image_name = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('images'), $image_name);

    $cv = $request->file('cv');
    $cv_name = time() . '.' . $cv->getClientOriginalExtension();
    $cv->move(public_path('cv'), $cv_name);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
   
       $instructor  = instructor::create([
        'first_name' => $request->first_name,
        'last_name' => $request->last_name,
        'date_of_birth' => $request->date_of_birth,
        'address' => $request->address,
        'teaching_experience' => $request->teaching_experience,
        'field_of_expertise' => $request->field_of_expertise,
        'user_id' => $user->id,
        'approved' => 0,
        'image' => $image_name,
        'cv' => $cv_name,
        'role' => 'pending_instructor',
    ]);

    $role = Role::first();
    $user->roles()->attach($role->id);
    return redirect()->route('instructor.login');
}
}
