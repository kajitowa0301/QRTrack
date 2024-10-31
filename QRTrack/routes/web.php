<?php

use App\Http\Controllers\DeleteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\SearchController;
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

// プロフィール編集用のルーティング
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::patch('/profile/nameupdate', [ProfileController::class, 'nameupdate'])->name('profile.nameupdate');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// 画面表示用のルーティング
Route::get('/',[ViewController::class,'home'])->name('home');

// 投稿画面用のルーティング
Route::get('/post',[PostController::class,'index'])->middleware('auth')->name('postView');
Route::post('/post',[PostController::class,'store'])->name('postStore');
Route::get('/post_view/{id}',[PostController::class,'show'])->name('postShow');
Route::get('/post_view/{id}/add', [PostController::class, 'showAddDetailForm'])->name('postAddDetailForm');
Route::post('/post_view/{id}/add', [PostController::class, 'addDetail'])->name('postAddDetail');

// 編集画面用のルーティング
Route::get('/edit_detail/{id}', [PostController::class, 'detailedit'])->name('detailEditForm');
Route::post('/edit_detail/{id}', [PostController::class, 'detailupdate'])->name('detailUpdate');

// 検索機能用のルーティング
Route::post('/search', [SearchController::class, 'search'])->name('search');

// 削除用のルーティング
Route::delete('posts/{id}', [DeleteController::class, 'destroy'])->name('postDestroy');

require __DIR__.'/auth.php';
