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
    public $courses;
    
    public function __construct()
    {
        //
        $this->courses = $courses;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.course_-cards');
    }
}
