<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class SearchController extends Controller
{
    public function search(Request $request)
    {   
        //検索キーワードの取得
        $query = $request->input('keyword');
        //一致したデータの検索
        $results = Posts::where('posts_type', 'LIKE', "%{$query}%")
                    ->orWhereHas('postDetails', function($q) use ($query) {
                    $q->where('details_title', 'LIKE', "%{$query}%");
                    })
                    ->get();
                  
        //検索結果をビューに渡す
        return view('search_view', compact('results', 'query'));
    }
}
