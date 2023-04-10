<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class courseitem extends Component
{
    /**
     * Create a new component instance.
     */
    public  $categories,$courses;
    public function __construct($categories,$courses)
    {
        $this->categories = $categories;
        $this->courses = $courses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courseitem');
    }
    
}
