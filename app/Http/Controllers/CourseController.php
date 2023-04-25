<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Categorie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\User;
use App\Models\Lesson;
use App\Models\Student;
use App\Models\Role;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        $categories = Category::all();
        $instructors = Instructor::where('approved', 1)->get();
        foreach ($courses as $course) {
            $instructor = Instructor::find($course->instructor);
            $course->instructor_name = $instructor->name;
        }
        return view('dashboard', compact('courses', 'categories', 'instructors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation 
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie_id' => 'required',    
            'is_free' =>'required',
            'level' => 'required',
            'language' => 'required',
            'instructor_id' => 'required',
        ]);
        // return message if the validation is not correct
        if(!$request->hasFile('image'))
        {
            return redirect()->back()->with('error', 'The image must be a file of type: jpeg, png, jpg, gif, svg.');
        }
        //do the creation of the course
        $course = new Course();
        $course->slug = Str::slug($request->title);
        $course->title = $request->title;
        $course->name = $request->name;
        $course->description = $request->description;
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        $course->image = $image_name;
        $course->categorie_id = $request->categorie_id;
        $course->is_free = $request->is_free;
        $course->level = $request->level;
        $course->language = $request->language;
        $course->instructor_id = $request->instructor_id;
        $course->save();
        return redirect()->route('dashboard');
    }

    public function coursesByCategory($slug)
    {
        $category = Categorie::where('slug', $slug)->firstOrFail();
        $courses = $category->courses()->paginate(10);
        $display = 'courses';
        return view('studentlab', compact('category', 'courses', 'display'));
    }

    public function enroll($course_id)
{
    $student_id = Role::where('name', 'student')->first()->id;
    $student = Student::where('user_id', auth()->user()->id)->first();
    $student_id = $student->id;
    $course = Course::findOrFail($course_id);
    
    if ($course->students->contains($student_id)) {
        Alert::error('course already enrolled', 'Error');
        return $this->myCourses();
        }
    $course->students()->attach($student_id);
    $display = 'courses';
    Alert::success('course enrolled', 'Success Course Added succefully');
    // call my courses function when it finish rendering 
    return $this->myCourses();
}
//get the courses that belong to the student authentified
public function myCourses()
{
    $student_id = Role::where('name', 'student')->first()->id;
    $student = Student::where('user_id', auth()->user()->id)->first();
    $courses = $student->courses()->get();
    $display = 'mycourses';
    return view('studentlab', compact('courses', 'display'));
}

//unsubscribe from a course
public function unsubscribe($course_id)
{
    $student_id = Role::where('name', 'student')->first()->id;
    $student = Student::where('user_id', auth()->user()->id)->first();
    $course = Course::findOrFail($course_id);
    if (!$course->students->contains($student)) {
        Alert::error('course not enrolled', 'Error');
        return redirect()->back()->with('error', 'You are not enrolled in this course.');
    }
    
    $course->students()->detach($student->id);
    Alert::success('course unenrolled', 'Success Course Removed succefully');
    return redirect()->back()->with('success', 'You have been unenrolled from the course.');
}

public function proceed($course_id)
{
    $course = Course::with('instructor', 'lessons', 'lessons.lessonResources.media')->findOrFail($course_id);
    $lessons = $course->lessons->sortBy('order');
    foreach ($lessons as $lesson) {
        $lesson->lessonResources = $lesson->lessonResources->sortBy('order');
    }
    // dd($lessons);

    $display = 'lessons';
    $currentLesson = $lessons->first();
    // dd($currentLesson->lessonResources);

    return view('studentlab', compact('course', 'lessons', 'display', 'currentLesson'));
}



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'categorie_id' => 'required',    
            'is_free' =>'required',
            'level' => 'required',
            'language' => 'required',
            'instructor_id' => 'required',
        ]);

        // return message if the validation is not correct
        if(!$request->hasFile('image'))
        {
            return redirect()->back()->with('error', 'The image must be a file of type: jpeg, png, jpg, gif, svg.');
        }
        //do the update of the course
        $course = Course::find($id);
        $course->title = $request->title;
        $course->name = $request->name;
        $course->description = $request->description;
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        $course->image = $image_name;
        $course->categorie_id = $request->categorie_id;
        $course->instructor_id = $request->instructor_id;
        $course->is_free = $request->is_free;
        $course->level = $request->level;
        $course->language = $request->language;
        $course->save();
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::findOrFail($id);
        $image_path = public_path('images') . '/' . $course->image;
        
        $course->delete();
        return redirect()->route('dashboard');
    }
}
