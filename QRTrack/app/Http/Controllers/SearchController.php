<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('keyword');
        $results = Posts::where('posts_type', 'LIKE', "%{$query}%")
                        ->get();
        dd($results);
        return view('search_view', compact('results', 'query'));
    }
}
