<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;
use App\Models\Categorie;
use App\Models\Instructor;


class DashboardController extends Controller
{
    public function index()
    {
        $instructors = Instructor::where('approved', 1)->get();
        $courses = Course::all();
        $categories = Categorie::all();
        foreach ($courses as $course) {
            foreach ($instructors as $instructor) {
                if ($instructor->id == $course->instructor_id) {
                    $course->instructor_name = $instructor->first_name." "." ".$instructor->last_name;
                }
            }
            //the loop for the categories to get the name of the category
            foreach (Categorie::all() as $categorie) {
                if ($categorie->id == $course->categorie_id) {
                    $course->categorie_name = $categorie->name;
                }
            }
        }
        $users = User::all();
        $lessons = Lesson::all();
        return view('dashboard', compact('users', 'lessons', 'courses', 'categories', 'instructors'));
    }
}
