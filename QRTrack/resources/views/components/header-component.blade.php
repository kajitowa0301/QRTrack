<div class=" mb-2 border-b border-gray-400 shadow-xl">
  <header class="flex flex-wrap md:justify-start md:flex-nowrap w-full bg-white text-sm py-4">
    <nav class="max-w-[85rem] w-full mx-auto px-4 md:flex md:items-center md:justify-between" aria-label="Global">
      <div class="flex items-center justify-between">
        <a class="flex-none" href="#">
          <!-- 画像の部分 -->
          <img class=" w-24 h-auto" src="/img/logo.svg" />
          <!--/　画像の部分  -->
        </a>
        <div class="md:hidden">
          <button type="button"
            class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none"
            data-hs-collapse="#navbar-image-1" aria-controls="navbar-image-1" aria-label="Toggle navigation">
            <svg class="hs-collapse-open:hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
              stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
              width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>
      <div id="navbar-image-1"
        class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block">
        <div class="flex flex-col gap-5 mt-5 md:flex-row md:items-center md:justify-end md:mt-0 md:ps-5">
          <!-- <a class="font-medium text-blue-500" href="#" aria-current="page">Landing</a> -->
          <a class="font-medium text-gray-600 hover:text-gray-400"  href="{{ route('home') }}">Home</a>
          <a class="font-medium text-gray-600 hover:text-gray-400"  href="{{ route('postView') }}">Post</a>
          <a class="font-medium text-gray-600 hover:text-gray-400" href="{{ route('profile.show') }}">Profile</a>
          <!-- ログイン確認用：後から削除する -->
          <!-- @auth
          <p class="font-medium text-pink-400 hover:text-gray-400" >{{Auth::user()->users_name }}</p>
          @endauth -->
          <!-- ユーザーのログインをしているかを判定して -->
          <!-- Login/Logoutを判別する -->
          @guest
        <a class="font-medium text-gray-600 hover:text-gray-400" href="{{ route('login') }}">Login</a>
      @endguest
          @auth
        <!-- Authentication -->
         <!-- ログアウト表示 -->
        <form method="POST" action="{{ route('logout') }}">
        @csrf
        <a :href="route('logout')" onclick="event.preventDefault();
                          this.closest('form').submit();">Log out</a>
        </form>
        //検索バー
        <form method = "GET" action = "{{ route('search') }}">
          <input type = "text" name = "keyword" class="border-2 border-gray-400 rounded-lg" placeholder="🔍キーワードを入力">
          <button type="submit" class="bg-blue-200 text-black p-2 rounded ">検索</button>
        </form>
      @endauth
        </div>
      </div>
    </nav>
  </header>
</div>