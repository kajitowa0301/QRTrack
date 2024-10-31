<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PostDetails;
use Illuminate\Http\Request;
use App\Models\Posts;

class DeleteController extends Controller
{
    public function destroy(Posts $id)
    {
        $postsId = $id->posts_id;
        PostDetails::where('posts_id', $postsId)->delete();
        Posts::where('posts_id', $postsId)->delete();
        return back()->with('message', '削除しました');
    }
}
