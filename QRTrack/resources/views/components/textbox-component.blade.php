<x-guest-layout>
<div class = "w-full">
    <div class="w-full grid grid-cols-2 grid-rows-1">
        <div class="w-full col-span-1 row-span-2">
            <div class ="text-gray-500">作成者</div>
            <div class ="">ゲスト</div>
        </div>
        <div class="col-span-1 row-span-2">
            <div class ="text-gray-500">作成日</div>
            <div class ="">2024/07/29</div>
        </div>


    </div>
</div>

  <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- ものの名前 -->
        <div class = "mt-8">
            <x-input-label for="users_mail" :value="__('モノの名前')" />
            <x-text-input id="users_mail" class="block mt-1 w-full" type="text" name="users_mail" :value="old('email')" required
                autofocus  />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- End ものの名前 -->

        <!-- タイトル -->
        <div class="mt-8">
            <x-input-label for="password" :value="__('タイトル')" />

            <x-text-input id="password" class="block mt-1 w-full" type="text" name="password" required
                 />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>
        <!-- End タイトル -->

    <!-- 詳細情報 -->
      <div class="relative mt-8">
      <x-input-label for="password" :value="__('詳細情報')" />
        <textarea id = "postdetail" class="mt-1 p-4 pb-12 block w-full border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-800 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="" required></textarea>
      </div>
    <!-- End 詳細情報 -->

    <!-- ボタン -->
    <div class="flex justify-center mt-8">
      <button class="group flex h-18 w-18 select-none items-center justify-center rounded-full border border-black leading-8 text-zinc-950 shadow-[0-1px_0_0px#d4d4d8inset,0_0_0_1px#f4f4f5inset,0_0.5px_0_1.5px#fffinset] hover:bg-zinc-50 hover:via-zinc-900 hover:to-zinc-800 active:shadow-[-1px_0px_1px_0px#e4e4e7inset,1px_0px_1px_0px#e4e4e7inset,0px_0.125rem_1px_0px#d4d4d8_inset]" aria-label="Change language" style="height: 4.5rem; width: 4.5rem;">
        <span class="flex items-center justify-center group-active:[transform:translate3d(0,1px,0)]">
          <svg width="24" height="24" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-zinc-950">
            <path d="M8 2.75C8 2.47386 7.77614 2.25 7.5 2.25C7.22386 2.25 7 2.47386 7 2.75V7H2.75C2.47386 7 2.25 7.22386 2.25 7.5C2.25 7.77614 2.47386 8 2.75 8H7V12.25C7 12.5261 7.22386 12.75 7.5 12.75C7.77614 12.75 8 12.5261 8 12.25V8H12.25C12.5261 8 12.75 7.77614 12.75 7.5C12.75 7.22386 12.5261 7 12.25 7H8V2.75Z"
            fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
          </svg>
        </span>
      </button>
    </div>



    </form>

</x-guest-layout>