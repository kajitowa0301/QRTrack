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
        $datas = DB::table('posts')
        ->leftJoin('post_details', 'posts.posts_id', '=', 'post_details.posts_id')
        ->select(
            'posts.posts_id',
            'posts.users_id',
            'posts.posts_type',
            'posts.img_path',
            'posts.posts_qr',
            DB::raw('GROUP_CONCAT(post_details.details_title SEPARATOR "||") as details_titles'),
            DB::raw('GROUP_CONCAT(post_details.details_content SEPARATOR "||") as details_contents')
        )
        ->groupBy('posts.posts_id', 'posts.users_id', 'posts.posts_type', 'posts.img_path', 'posts.posts_qr')
        ->get();
                dd($datas);
          return view('home',compact('datas'));

    }
}
