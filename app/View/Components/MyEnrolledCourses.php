<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MyEnrolledCourses extends Component
{
    /**
     * Create a new component instance.
     */
    public $courses,$display;
    public function __construct($courses,$display)
    {
        $this->courses = $courses;
        $this->display = $display;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.my-enrolled-courses');
    }
}
