<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostDetails extends Model
{
    use HasFactory;
protected $primaryKey = 'details_id';
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
    // 詳細追加用のメソッド
    public static function addPostDetails($title, $content, $posts_id)
    {
        $postDetails = new PostDetails([
            'details_title' => $title,
            'details_content' => $content,
            'posts_id' => intval($posts_id), // 新しいメソッドでは直接使用
        ]);
        $postDetails->save();
    }

    // 詳細編集用のメソッド
    public static function updatePostDetails($title, $content, $id)
    {
        $postDetails =  PostDetails::where('details_id', $id)->first();
        $postDetails->details_title = $title;
        $postDetails->details_content = $content;
        $postDetails->save();
    }

    // postsとのリレーションシップを定義
    public function post()
    {
        return $this->belongsTo(Posts::class, 'posts_id');
    }

}
