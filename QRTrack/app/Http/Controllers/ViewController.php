<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PostDetails;
use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function home()
    {
        // $datas = Posts::get('posts_id');
        $datas = Posts::get(['posts_id','posts_type','posts_qr','img_path']);
        $details = PostDetails::get(['details_title','details_content']);
        $zipped = collect($datas)->zip($details);
        dd($zipped);
        return view('home',compact('datas'));

    }
}
