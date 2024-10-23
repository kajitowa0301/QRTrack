<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class postViewController extends Controller
{
    public function index()
    {
        return view('post_view');
    }
}
