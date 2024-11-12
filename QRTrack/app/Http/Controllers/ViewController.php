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
            ->join('post_details', 'posts.posts_id', '=', 'post_details.posts_id')
            ->select(
                'posts.posts_id',
                'posts.users_id',
                'posts.posts_type',
                'posts.img_path',
                'posts.posts_qr',
                'post_details.details_title',
                'post_details.details_content'
            )
            ->get();
                dd($datas);
          return view('home',compact('datas'));

    }
}
