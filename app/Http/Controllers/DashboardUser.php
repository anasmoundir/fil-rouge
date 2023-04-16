<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\Categorie;


class DashboardUser extends Controller
{
    public function index()
    {
        //compact the users and lessons to send them to the dashboard
        $users = User::all();
        $lessons = Lesson::all();
        $courses = Course::all();
        $categories = Categorie::all();
        $instructors = Instructor::all();
        return view('instructor_approval', compact('users', 'lessons', 'courses', 'categories', 'instructors'));
    }

}
