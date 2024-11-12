<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Posts extends Model
{
    use HasFactory;

    // 主キーを指定
    protected $primaryKey = 'posts_id';

    protected $fillable = [
        // 物の名前
        'posts_type',
        //QRコードのURL 
        'posts_qr',
        'users_id',
        // strageのpath
        'img_path',
    ];
    public function details(){
        return $this->hasMany(PostDetails::class,'posts_id','posts_id');
    }

    // 投稿を作成
    public static function createPosts($obj_name,$user_id)
    {
        $posts = new Posts([
            'posts_type'=> $obj_name,
            'users_id' => $user_id,
            'posts_qr' => '',
        ]);
        $posts->save();
        return $posts;
    }
    // URLを更新
    public static function updateUrl($url,$id)
    {
        $path = $url.'/'.$id;
        $up = new Posts();
        $up->where('posts_id',$id)
        ->update(['posts_qr'=>$path]);
    }
    // 画像のパスを保存
    public static function imgPathQrCode($src,$id)
    {
        $img = new Posts();
        $img->where('posts_id',$id)
        ->update(['img_path'=>$src]);
    }

    // post_detailとのリレーションシップを定義
    public function postDetails()
    {
        return $this->hasMany(PostDetails::class, 'posts_id');
    }

    //投稿個別表示 
    public static function getDetails($id)
    {
        $datas = Posts::where('posts_id', $id['posts_id'])->get(['posts_type', 'created_at']);
        return $datas;
    }
}