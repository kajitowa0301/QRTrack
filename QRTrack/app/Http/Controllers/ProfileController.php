<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Posts;
use App\Models\User;
use App\Models\PostDetails;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function show(): View{
        $postCount =  Posts::where('users_id', auth()->id())->get();
        $datas = Posts::where('users_id', auth()->id()) // 現在のユーザーの投稿をフィルタリング
    ->get()
    ->map(function ($post) {
        // 各投稿に関連するpost_detailsから最初のdetails_titleを取得
        $detailsTitle = PostDetails::where('posts_id', $post->posts_id)
            ->orderBy('details_id', 'ASC')
            ->value('details_title'); // 直接details_titleを取得

        // details_titleを新しいプロパティとして追加
        $post->details_title = $detailsTitle;

        return $post;
    });
        dd($datas->details_title);
        return view('/profile',compact('postCount','datas'));
    }
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.show')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function nameupdate(Request $request): RedirectResponse
    {
        $request->validate([
            'newname' => ['required', 'string', 'max:255'],
        ]);
        $user = User::find(auth()->id());
        $user->users_name = $request->input('newname');
        $user->save();


        return Redirect::route('profile.show')->with('status', 'name-updated');
    }
}
