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
        // strageのpath
        'img_path',
    ];

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

    public static function updateUrl($url,$id)
    {
        $path = $url.'/'.$id;
        $up = new Posts();
        $up->where('posts_id',$id)
        ->update(['posts_qr'=>$path]);
    }

    public static function imgPathQrCode($src,$id)
    {
        $img = new Posts();
        $img->where('posts_id',$id)
        ->update(['img_path'=>$src]);
    }
}