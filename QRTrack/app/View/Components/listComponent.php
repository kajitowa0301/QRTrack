<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use App\Models\Posts; // Adjust the namespace according to your project structure
use App\Models\PostDetails; // Import the PostDetails model
use Illuminate\Contracts\View\View;

class listComponent extends Component
{
    public $detail;

    /**
     * Create a new component instance.
     */
    public function __construct(PostDetails $detail)
    {
        $this->detail = $detail;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // dd($this->detail);
        $details = PostDetails::where('details_id', $this->detail->details_id)->get(['details_title', 'details_content','details_id'])->first();
        $id =$details->details_id;
        return view('components.list-component', compact('details','id'));
    }
}