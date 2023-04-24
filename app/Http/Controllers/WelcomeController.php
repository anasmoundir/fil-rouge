<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class WelcomeController extends Controller
{
    
    public function index()
    {
        $categories = Categorie::paginate(10);
        return view('welcome', compact('categories'));
    }
}
