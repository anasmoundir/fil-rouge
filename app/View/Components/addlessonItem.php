<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;


class addlessonItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $courses,$users,$categories,$instructors;
    public function __construct($courses,$users,$categories,$instructors)
    {
        $this->courses = $courses;
        $this->users = $users;
        $this->categories = $categories;
        $this->instructors = $instructors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.addlesson-item');
    }
}
