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
        $datas = Posts::with(['details' => function ($query) {
            $query->orderBy('posts_id')->limit(1);
        }])->get();
        dd($datas->details[0]);
          return view('home',compact('datas'));

    }
}
