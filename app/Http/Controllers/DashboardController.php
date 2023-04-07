<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\Categorie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $lessons = Lesson::all();
        $categories = Categorie::all();
        $users = User::all();
        $courses = Course::all();
        return view('dashboard', compact('lessons', 'categories', 'users', 'courses'));
    }
}
