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
class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $categories = Categorie::all();
        $instructors = Instructor::all();
        $courses = Course::all();
        return view('instructorlab', compact('categories', 'instructors', 'courses'));
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
    //validate the request
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
        $user = auth()->user(),
          $instructorId = User::select('instructors.id as instructor_id')
        ->join('role_user', 'users.id', '=', 'role_user.user_id')
        ->join('roles', 'role_user.role_id', '=', 'roles.id')
        ->join('instructors', 'users.id', '=', 'instructors.user_id')
        ->where('roles.name', '=', 'instructor')
        ->where('users.id', '=', $user->id)
        ->first(),
        'instructor_id' => $instructorId,
        'category_id' => $request->input('category_id')
    ]);

    //create a new lesson
    $lesson = Lesson::create([
        'title' => $validatedData['title'],
        'description' => substr($validatedData['description'], 0, 256),
        'course_id' => $course->id,
        'video_url' => $validatedData['video_url'],
    ]);
    // dd($lesson->id);
    foreach ($validatedData['lesson_resources'] as $index => $lessonResourceData) {
        $file = $lessonResourceData['file'];
        $type = $file->getClientOriginalExtension();
        $lessonResource = new LessonResource([
            'name' => $lessonResourceData['name'],
            'description' => substr($lessonResourceData['description'], 0, 256),
            'lesson_id' => $lesson->id,
            'type' => $type,
            'file' => $file->store('lesson_resources'),
            'allow_download' => true,
            'prosseced_percentage' => '0',
            'uid' => uniqid(),
            'ressouce_id' => '0',
        ]);
        //associate the lesson resource with the lesson
        $lessonResource->lesson()->associate($lesson);
        $lessonResource->save();
    }

    //return view to the instrucorlab blade view
    return redirect()->route('instructorlab')->with('success', 'Lesson created successfully');
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
