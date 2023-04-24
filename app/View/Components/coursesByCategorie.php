<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class coursesByCategorie extends Component
{
    /**
     * Create a new component instance.
     */
     public $courses;
    public function __construct($courses)
    {
        //
        $this->courses = $courses;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.courses-by-categorie');
    }
}
