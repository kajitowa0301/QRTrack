<!-- ものの名前 -->
<div class = "mt-8">
  <x-input-label for="users_mail" :value="__('モノの名前')" />
  <x-text-input id="users_mail" class="block mt-1 w-full" type="text" name="posts_type" :value="old('email')" required
  autofocus  />
  <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>
<!-- End ものの名前 -->

<!-- タイトル -->
<div class="mt-8">
    <x-input-label for="password" :value="__('タイトル')" />

    <x-text-input id="password" class="block mt-1 w-full" type="text" name="details_title" required
          />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>
<!-- End タイトル -->

<!-- 詳細情報 -->
<div class="relative mt-8">
  <x-input-label for="password" :value="__('詳細情報')" />
  <textarea id = "postdetail" name = "details_content" class="mt-1 p-4 pb-12 block w-full border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="" required></textarea>
</div>
<!-- End 詳細情報 -->