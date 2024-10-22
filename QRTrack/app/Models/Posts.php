<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        // 物の名前
        'posts_type',
        //QRコードのURL 
        'posts_qr',
        'users_id',
    ];

    public static function createPosts($obj_name,$user_id,$url)
    {
        $posts = new Posts();
        $posts->posts_type = $obj_name;
        $posts->users_id = $user_id;
        $posts->save();

        $posts_id = $posts->id;
        $path = $url.$posts_id;
        $posts->posts_qr = $path;
        $posts->save();

        dd($posts); 
        
    }
}
