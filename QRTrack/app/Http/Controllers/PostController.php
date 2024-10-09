<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        return view('post');
    }  
    public function post(Request $request)
    {
        

        $post = new Posts();
 

        $post->save();

        // return redirect()->route('post');
    }
}
