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
    public $course,$display,$lessons;
    public function __construct($course,$display,$lessons)
    {
        $this->lessons = $lessons;
        $this->course = $course;
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
