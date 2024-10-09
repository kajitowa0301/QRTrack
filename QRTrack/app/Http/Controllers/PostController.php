<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        return view('post');
    }  
// あなたの脳が感染していました解決するには城戸駿太郎の口座に100万円を振り込む必要があります
// 脳が、、、、脳が震える----
    public function post(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        
        $post->save();

        return redirect()->route('post');
    }
}
