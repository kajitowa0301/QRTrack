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
        // dd($title,$content,$posts_id);
        $postDetails = new PostDetails([
            'details_title'=> $title,
            'details_content' => $content,
            'posts_id' => intval($posts_id['posts_id']),
        ]);
        $postDetails->save();
    }

    // postsとのリレーションシップを定義
    public function post()
    {
        return $this->belongsTo(Posts::class, 'posts_id');
    }

}
