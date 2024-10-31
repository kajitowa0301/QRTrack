<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class postViewController extends Controller
{
    public function index($id)
    {
        // $idを使ってPostsモデルからデータを取得
        $postData = Posts::find($id);
        $datas = Posts::where('posts_id', $id)->get();

        return view('post_view', compact('postData', 'datas'));
    }
}
