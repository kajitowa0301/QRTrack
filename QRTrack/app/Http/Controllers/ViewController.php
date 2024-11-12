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
        $datas = Posts::with('details')->get();
                dd($datas->first()->details_title);
          return view('home',compact('datas'));

    }
}
