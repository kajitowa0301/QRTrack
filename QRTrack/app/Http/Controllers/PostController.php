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
        $posts = new Posts();
        $postDetail = new PostDetails();
    }
}
