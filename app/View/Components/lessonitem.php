<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class lessonitem extends Component
{
    /**
     * Create a new component instance.
     */
    public $lessons,  $courses;
    public function __construct($lessons, $courses)
    {
        //
        $this->lessons = $lessons;
        $this->courses =  $courses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lessonitem');
    }
}
