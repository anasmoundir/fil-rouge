<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $courses = Course::all();
        return view('dashboard', compact('courses'));

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
            'price' => 'required',
            'category_id' => 'required',    
            'is_free' =>'required',
            'level' => 'required',
            'language' => 'required',
        ]);
        // return message if the validation is not correct
        if(!$request->hasFile('image'))
        {
            return redirect()->back()->with('error', 'The image must be a file of type: jpeg, png, jpg, gif, svg.');
        }
        //do the creation of the course
        $course = new Course();
        $course->title = $request->title;
        $course->name = $request->name;
        $course->description = $request->description;
        $image = $request->file('image');
        $image_name = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        $course->image = $image_name;
        $course->price = $request->price;
        $course->category_id = $request->category_id;
        $course->is_free = $request->is_free;
        $course->level = $request->level;
        $course->language = $request->language;
        $course->save();
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
        //validation before the update
        $request->validate([
            'title' => 'required',
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required',
            'category_id' => 'required',    
            'is_free' =>'required',
            'level' => 'required',
            'language' => 'required',
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
        $course->price = $request->price;
        $course->category_id = $request->category_id;
        $course->is_free = $request->is_free;
        $course->level = $request->level;
        $course->language = $request->language;
        $course->save();
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
        $course = Course::find($id);
        $course->delete();
    }
}
