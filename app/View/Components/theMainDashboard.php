<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class theMainDashboard extends Component
{
    /**
     * Create a new component instance.
     */
    public $lessons, $categories, $users, $courses;
    public function __construct( )
    {
        // $this->lessons = $lessons;
        // $this->categories = $categories;
        // $this->users = $users;
        // $this->courses = $courses;
    }
    


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.the-main-dashboard');
    }
}
