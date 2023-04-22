<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class course_Cards extends Component
{
    /**
     * Create a new component instance.
     */
    public $courses,$lessonResources,$lessons,$instructor;
    public function __construct($courses,$instructor,$lessons,$lessonResources)
    {
        $this->courses = $courses;
        $this->instructor = $instructor;
        $this->lessons = $lessons;
        $this->lessonResources = $lessonResources;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course_-cards');
    }
}
