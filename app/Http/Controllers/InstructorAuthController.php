<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


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
            'address' => 'required',
        ]);

        
        if(!$request->hasFile('image'))
        {
            return redirect()->back()->with('error', 'The image must be a file of type: jpeg, png, jpg, gif, svg.');
        }
        if(!$request->hasFile('cv'))
        {
            return redirect()->back()->with('error', 'The cv must be a file of type: pdf, doc, docx.');
        }
        $user = new User();
        $user->name = $request->name;
        $user->role = 'pending_instructor';
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        $instructor = new Instructor();
        $instructor->first_name = $request->first_name;
        $instructor->last_name = $request->last_name;
        $instructor->date_of_birth = $request->date_of_birth;
        $instructor->address = $request->address;
        $instructor->teaching_experience = $request->teaching_experience;
        $instructor->field_of_expertise = $request->field_of_expertise;
        $instructor->user_id = $user->id;
        $instructor->approved = 0;
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        $instructor->image = $image_name;
        $cv = $request->file('cv');
        $cv_name = time() . '.' . $cv->getClientOriginalExtension();
        $cv->move(public_path('cv'), $cv_name);
        $instructor->cv = $cv_name;
        $instructor->save();
        return redirect()->route('instructor.login');
      }

    
}
