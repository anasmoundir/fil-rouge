<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LessonResource;


class LessonResourceController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'type' => 'required'|'active_url',
            'file' => 'required',
            'category_id' => 'required|exists:categories,id',
            'course_id' => 'required|exists:courses,id',
        ]);

        $lessonResource = new LessonResource();
        $lessonResource->name = $request->name;
        $lessonResource->description = $request->description;
        $lessonResource->type = $request->type;
        $lessonResource->file = $request->file('file')->store('lesson_resources', 's3');
        $lessonResource->category_id = $request->category_id;
        $lessonResource->course_id = $request->course_id;
        $lessonResource->save();

        return redirect()->route('lessons.show', $lessonResource->lesson_id);
    }
}
