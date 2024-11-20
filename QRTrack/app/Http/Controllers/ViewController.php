<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function home()
    {
        // $datas = Posts::get('posts_id');
        $datas = Posts::select('posts.*', DB::raw('(
            SELECT details_title 
            FROM post_details 
            WHERE post_details.posts_id = posts.posts_id 
            ORDER BY details_id ASC 
            LIMIT 1
        ) as details_title'))
        ->get()::paginate(2);
          return view('home',compact('datas'));

    }
}
