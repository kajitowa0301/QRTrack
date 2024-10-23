<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// プロフィール画面用のルーティング
// Route::get('/profile', function() {
//     return view('profile');
// })->name('profile');

// 投稿表示用のルーティング
Route::get('/post_view',function(){
    return view('post_view');
})->name('post_view');

// 投稿編集用のルーティング
Route::get('/postEdit',function(){
    return view('postEdit');
})->name('postEdit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// いったんコメントアウト
Route::middleware('auth')->group(function () {
    Route::get ('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// ホーム画面用のルーティング
Route::get('/',[ViewController::class,'home'])->name('home');
// 投稿画面用のルーティング
Route::get('/post',[PostController::class,'index'])->middleware('auth')->name('postView');
Route::post('/post',[PostController::class,'store'])->name('postStore');

require __DIR__.'/auth.php';
