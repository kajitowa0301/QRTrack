<?php

namespace App\View\Components;

use App\Models\PostDetails;
use App\Models\Posts;
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
        $data = Posts::where('posts_id',72)->first();
        // dd($data);
        $id = $data['posts_id'];
        $title_content = PostDetails::where('posts_id',72)->first();
        // dd($title_content);
        return view('components.card-component',compact('data','title_content','id'));
    }
}
