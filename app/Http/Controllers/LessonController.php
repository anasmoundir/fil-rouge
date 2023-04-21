<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\LessonResource;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $display = false;
        $categories = Categorie::all();
        $instructors = Instructor::all();
    
        $courses = Course::all();
        $users = User::all();
        $display = false;
        // dd($categories, $instructors, $courses, $display, $users);
        return view('instructorlab', compact('categories', 'instructors', 'courses', 'display', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function fetchCourseItem()
    {
        $user = auth()->user();
        $categories = Categorie::all();
        $instructors = Instructor::all();
        $courses = Course::all();
        $users = User::all();
        $instructor_id = User::select('instructors.id as instructor_id')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->join('instructors', 'users.id', '=', 'instructors.user_id')
        ->where('roles.name', '=', 'instructor')
        ->where('users.id', '=', $user->id)
        ->first()->instructor_id;
        $courses = Course::where('instructor_id', $instructor_id)->get();
        $display = true;
        return view('instructorlab', compact('courses', 'instructor_id' , 'display','categories', 'instructors','users'));
    }


    public function AddCourseIfNotexist(Request $request)
    {
    
        $course = Course::where('title', $request->title)->first();
        if ($course) {

            Alert::error('Error!', 'Course already exist');
            return redirect()->route('instructorlab');
        } else {
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

        if(!$request->hasFile('image'))
        {
            return redirect()->back()->with('error', 'The image must be a file of type: jpeg, png, jpg, gif, svg.');
        }

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
        Alert::success('course +', 'Success Course Added succefully');
        return redirect()->route('instructorlab');
        
    }}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      
        $validatedData = $request->validate([
            'course_id' => 'required|integer',
            'new_course_name' => 'required_if:course_id,0',
            'title' => 'required',
            'description' => 'required',
            'video_url' => 'nullable|url',
            'lesson_resources.*.name' => 'required',
            'lesson_resources.*.description' => 'required',
            'lesson_resources.*.file' => 'required|file|max:10240',
        ]);
    
        $course = Course::firstOrCreate(['id' => $validatedData['course_id']], [
            'name' => $request->input('course_name'),
            // ...
        ]);
    
        $lesson = Lesson::create([
            'title' => $validatedData['title'],
            'description' => substr($validatedData['description'], 0, 256),
            'course_id' => $course->id,
            'video_url' => $validatedData['video_url'],
        ]);
    
        foreach ($validatedData['lesson_resources'] as $index => $lessonResourceData) {
            $file = $lessonResourceData['file'];
            $type = $file->getClientOriginalExtension();
    
            $lessonResource = new LessonResource([
                'name' => $lessonResourceData['name'],
                'description' => substr($lessonResourceData['description'], 0, 256),
                'lesson_id' => $lesson->id,
                'type' => $type,
                'allow_download' => true,
                'prosseced_percentage' => '0',
                'uid' => uniqid(),
                'ressouce_id' => '0',
                'file' => $file->getClientOriginalName(),
            ]);
    
            $lessonResource->lesson()->associate($lesson);
            $lessonResource->save();
    
            // Add the media file to the lesson resource
            $lessonResource->addMedia($file)
                ->usingFileName($file->getClientOriginalName())
                ->toMediaCollection('lesson_resources');
        }
        Alert::success('Success ', 'Lesson created successfully');
        return redirect()->route('instructorlab');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
