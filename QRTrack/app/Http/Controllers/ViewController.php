<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;

class ViewController extends Controller
{
    public function home(){
        $datas = Posts::get('posts_id');
        return view('home',compact('datas'));
    }
}
