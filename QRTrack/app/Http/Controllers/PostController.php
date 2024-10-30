<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;
use App\Models\PostDetails;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    // 投稿画面表示
    public function index()
    {
        return view('post');
    }  
    
    // 投稿処理
    public function store(Request $request)
    {   
        // Postsモデルにセット
        $id = auth()->id();
        $url =$request->fullUrl();
        $obj_name = $request->posts_type;

        // PostDetailsモデルにセット
        $title = $request->details_title;
        $content = $request->details_content;

        // Postsモデルに保存
        Posts::createPosts($obj_name,$id);
        
        // Postsモデルに保存されたユーザーの最新の投稿IDを取得
        $posts_id = Posts::where('users_id', auth()->id())
        ->orderBy('created_at', 'desc')
        ->first('posts_id');

        // 保存された情報を元にURLを作成
        Posts::updateUrl($url,$posts_id['posts_id']);

        // QRcodeに必要なURLを取得
        $qr_url = Posts::where('users_id', auth()->id())
        ->orderBy('created_at', 'desc')
        ->first('posts_qr');

        
        // Qrcodeを生成
         $qrcode =  QRcode::format('png')->generate($qr_url['posts_qr']);
        // 生成したQRcodeをStorageに保存
        $file_name = 'qrcode'.time().'.png';
        $src = Storage::url($file_name);
        Storage::disk('public')->put($file_name, $qrcode);

        // 生成したQRcodeのパスをPostsモデルに保存
        Posts::imgPathQrCode($src,$posts_id['posts_id']);


        // タイトル、詳細をPostDetailsモデルに保存
        PostDetails::createPostDetails($title,$content,$posts_id);

        return redirect()->route('home');
    }

    // 投稿個別表示
    public function show(Posts $id)
    {
        $datas = Posts::getDetails($id); 
        $postId = $id['posts_id'];
        // dd($postId);
        return view('post_view',compact('datas','postId'));
    }

}
