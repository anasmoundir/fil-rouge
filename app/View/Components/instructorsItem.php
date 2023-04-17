<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class instructorsItem extends Component
{
    /**
     * Create a new component instance.
     */
    public $instructors;


    public function __construct($instructors)
    {
        $this->instructors = $instructors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.instructors-item');
    }
}
