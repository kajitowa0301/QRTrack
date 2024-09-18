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