<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instructor;
use App\Models\User;
use App\Models\Categorie;
use App\Models\Course;
use App\Models\Lesson;
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
        $validatedData = $request->validate([
            'category' => 'required',
            'title' => 'required',
            'description' => 'required',
            'course_id' => 'required|exists:courses,id',
            'video_url' => 'nullable|url',
            'lesson_resources.*.name' => 'required',
            'lesson_resources.*.description' => 'required',
            'lesson_resources.*.type' => 'required',
            'lesson_resources.*.file' => 'required|file|mimes:pdf,docx,txt',
        ]);
    
        $category = Category::firstOrCreate(['name' => $validatedData['category']]);
    
        $lesson = Lesson::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
            'course_id' => $validatedData['course_id'],
            'category_id' => $category->id,
            'video_url' => $validatedData['video_url'],
        ]);
    
        foreach ($validatedData['lesson_resources'] as $lessonResourceData) {
            $lessonResource = new LessonResource([
                'name' => $lessonResourceData['name'],
                'description' => $lessonResourceData['description'],
                'type' => $lessonResourceData['type'],
                'file_path' => $lessonResourceData['file']->store('lesson_resources'),
            ]);
    
            $lessonResource->lesson()->associate($lesson);
            $lessonResource->save();
        }
        //save the lesson
        $lesson->save();

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
