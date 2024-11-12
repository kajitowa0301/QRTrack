<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class postViewController extends Controller
{
    public function index($id)
    {
        // $idを使ってPostsモデルからデータを取得
        $postData = Posts::find($id);
        $datas = Posts::where('posts_id', $id)->get();
        dd($postData);
        return view('post_view', compact('postData', 'datas' ,'id'));
    }
}
