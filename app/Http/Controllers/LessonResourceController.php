<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LessonResource;


class LessonResourceController extends Controller
{
   public function index()
    {
        //the categorie the lesson belongs to 
        $lesson_resources = LessonResource::all();
        //
    }
}
