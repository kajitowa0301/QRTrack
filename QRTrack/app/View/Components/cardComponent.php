<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class cardComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }
    public function render(): View|Closure|string
    {
        return view('components.card-component');
    }
}
