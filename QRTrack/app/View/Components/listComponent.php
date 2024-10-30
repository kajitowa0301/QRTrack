<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use App\Models\Posts; // Adjust the namespace according to your project structure
use App\Models\PostDetails; // Import the PostDetails model
use Illuminate\Contracts\View\View;

class listComponent extends Component
{
    public $postId;

    /**
     * Create a new component instance.
     */
    public function __construct(int $postId)
    {
        $this->postId = $postId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $details = PostDetails::where('posts_id', $this->postId)->get(['details_title', 'details_content']);
        return view('components.list-component', compact('details'));
    }
}