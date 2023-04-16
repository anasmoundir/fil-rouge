<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;

class approveInstructor extends Controller
{
    //turn to page instructor approval
    public function index()
    {
        return view('instructor_approval');
    }

    public function approveInstructor(Request $request)
    {
        $instructor = Instructor::find($request->id);
        $instructor->approved = 1;
        $instructor->save();
        return redirect()->back();
    }
    public function downloadResume($id)
    {
        $instructor = Instructor::find($id);
        $cv_name = $instructor->cv;
        return response()->download(public_path('cv/' . $cv_name));
    }

}