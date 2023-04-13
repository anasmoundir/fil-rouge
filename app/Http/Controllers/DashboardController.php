<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\Categorie;



class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $lessons = Lesson::all();
        $courses = Course::all();
        $categories = Categorie::all();
        return view('dashboard', compact('users', 'lessons', 'courses', 'categories'));
    }
}
