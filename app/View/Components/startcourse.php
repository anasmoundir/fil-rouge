<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class startcourse extends Component
{
    /**
     * Create a new component instance.
     */
    public $course;
    public $lessons;
    public $currentLesson;
    public $display;
    
    public function __construct($course, $lessons, $currentLesson, $display)
    {
        $this->course = $course;
        $this->lessons = $lessons;
        $this->currentLesson = $currentLesson;
        $this->display = $display;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.startcourse');
    }
}
