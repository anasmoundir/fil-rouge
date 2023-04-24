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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function fetchCourseItem()
    {
        $user = auth()->user();
        $categories = Categorie::all();
        $instructors = Instructor::all();
        $users = User::all();
        $instructor = Instructor::where('user_id', auth()->user()->id)->first();
        $courses = Course::where('instructor_id', $instructor->id)->get();
        $lessons = [];
        $lessonResources = [];
    
        foreach ($courses as $course) {
            $courseLessons = Lesson::where('course_id', $course->id)->get();
            if (!$courseLessons->isEmpty()) {
                $lessons = $courseLessons;
                $lessonResources = LessonResource::whereIn('lesson_id', $lessons->pluck('id'))->get();
            }
        }
    
        $display = true;
        return view('instructorlab', compact('courses', 'display', 'instructor', 'lessons', 'lessonResources'));
    }

    public function index()
    {
      
        $categories = Categorie::all();
        $instructors = Instructor::all();
        $instructor = Instructor::where('user_id', auth()->user()->id)->first();
        $courses = Course::where('instructor_id', $instructor->id)->get();
        $users = User::all();
        $categories = Categorie::all();
        $display = false;
        return view('instructorlab', compact('categories', 'instructors', 'courses', 'display', 'users', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
        $instructor = Instructor::where('user_id', auth()->user()->id)->first();
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
        $course->instructor_id = $instructor->id;
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
        'course_id' => 'required|integer|exists:courses,id',
        'title' => 'required',
        'description' => 'required',
        'video_url' => 'nullable|url',
        'lesson_resources.*.name' => 'required',
        'lesson_resources.*.description' => 'required',
        'lesson_resources.*.file' => 'required|file|max:10240',
    ]);

    $course = Course::findOrFail($validatedData['course_id']);

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
    public function deleteCourse($id)
    {
        $courses = Course::find($id);
        $image_path = public_path('images/' . $courses->image);
        if (File::exists($image_path)) {
            File::delete($image_path);
        }
        $courses->delete();
        Alert::success('Success ', 'Course deleted successfully');
        $display = true;
        // $data = $this->fetchCourseItem();
        return redirect()->route('instructorlab');
    }
    // delete the lesson
    public function deleteLesson($id)
    {
        $lesson = Lesson::find($id);
        $lesson->delete();
        Alert::success('Success ', 'Lesson deleted successfully');
        $display = true;
        // $data = $this->fetchCourseItem();
        return redirect()->route('instructorlab');
    }
    // delete the lesson resource
    public function deleteLessonResource($id)
    {
        $lessonResource = LessonResource::find($id);
        $lessonResource->delete();
        Alert::success('Success ', 'Lesson Resource deleted successfully');
        $display = true;
        // $data = $this->fetchCourseItem();
        return redirect()->route('instructorlab');
    }

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
