<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        // タイトル
       'details_title',
        // 詳細   
       'details_content',
        //posts_id
        'posts_id',    
    ];

    public static function createPostDetails($title,$content,$posts_id)
    {
        $postDetails = new PostDetails();
        $postDetails->details_title = $title;
        $postDetails->details_content = $content;
        $postDetails->posts_id = $posts_id;
        $postDetails->save();
    }
}
