<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class likeButtonComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $id ,
    )
    {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.like-button-component');
    }
}
