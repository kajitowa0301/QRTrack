<?php

namespace App\View\Components;

use App\Models\PostDetails;
use App\Models\Posts;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class cardComponent extends Component
{
    public $data;

    /**
     * Create a new component instance.
     */
    public function __construct(Posts $data)
    {
        $this->data = $data;
    }

    public function render(): View|Closure|string
    {
        $data = $this->data;
        $id = $data['posts_id'];
        $postData = Posts::where('posts_id', $id)->first(['users_id','posts_type','posts_qr','img_path']);
        $title_content = PostDetails::where('posts_id', $id)->first();
        return view('components.card-component', compact('postData', 'title_content', 'id'));
    }
}