<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\PostDetails;

class PostController extends Controller
{
    // 投稿画面表示
    public function index()
    {
        return view('post');
    }  
    
    // 投稿処理
    public function store(Request $request)
    {   
        // Postsモデルにセット
        $id = auth()->id();
        $url =$request->fullUrl();
        $obj_name = $request->posts_type;

        // PostDetailsモデルにセット
        $title = $request->details_title;
        $content = $request->details_content;

        // Postsモデルに保存
        Posts::createPosts($obj_name,$id,$url);

        // Postsモデルに保存保存されたユーザーの最新の投稿IDを取得
        $posts_id = Posts::select('posts_id')->where('users_id',$id)->latest()->first();
        PostDetails::createPostDetails($title,$content,$posts_id);

        return redirect()->route('/');
    }
}
