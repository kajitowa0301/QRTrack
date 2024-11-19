<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        //検索キーワードの取得
        $query = $request->input('keyword');
        //一致したデータの検索
        $results = Posts::where('posts_type', 'LIKE', "%{$query}%")
            ->orWhereHas('postDetails', function ($q) use ($query) {
                $q->where('details_title', 'LIKE', "%{$query}%");
            })
            ->get();
        foreach ($results as $result) {
            $datas = Posts::where('posts_id', $result->posts_id)
            ->select('posts.*', DB::raw('(
                SELECT details_title 
                FROM post_details 
                WHERE post_details.posts_id = posts.posts_id 
                ORDER BY details_id ASC 
                LIMIT 1
            ) as details_title'))
            ->get();
        }
        dd($datas);
        //検索結果をビューに渡す
        return view('search_view', compact('results', 'query'));
    }
}
