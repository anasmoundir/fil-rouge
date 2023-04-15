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
    public  $categories,$courses,$instructors;
    public function __construct($categories,$courses,$instructors)
    {
        $this->categories = $categories;
        $this->courses = $courses;
        $this->instructors = $instructors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courseitem');
    }
    
}
