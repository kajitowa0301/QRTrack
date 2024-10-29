<?php

namespace App\View\Components;

use App\Models\PostDetails;
use App\Models\Posts;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class cardComponent extends Component
{
    public $postId;

    /**
     * Create a new component instance.
     */
    public function __construct($postId)
    {
        $this->postId = $postId;
    }

    public function render(): View|Closure|string
    {
        $data = Posts::where('posts_id', $this->postId)->first();
        $id = $data['posts_id'];
        $title_content = PostDetails::where('posts_id', $this->postId)->first();

        return view('components.card-component', compact('data', 'title_content', 'id'));
    }
}