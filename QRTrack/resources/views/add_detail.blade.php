<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>詳細追加画面</title>

  @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- ←これを書き込むことでTailwindCSSが導入できる -->
</head>
<body>
  <x-header-component />
  <div class="mt-6 ml-4 font-medium text-xl text-black">
    <p>詳細を追加</p>
  </div>
  <div class="flex justify-center items-center">
    <p class="font-bold text-3xl">{{$postData->posts_type}}</p>
  </div>
  <form method="POST" action="{{ route('postAddDetail', ['id' => $postData->posts_id]) }}">
    @csrf
    <div class="mt-4">
      <label for="details_title" class="block text-sm font-medium text-gray-700">タイトル</label>
      <input type="text" name="details_title" id="details_title" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
    </div>
    <div class="mt-4">
      <label for="details_content" class="block text-sm font-medium text-gray-700">詳細</label>
      <textarea name="details_content" id="details_content" class="mt-1 p-2 border border-gray-300 rounded w-full" required></textarea>
    </div>
    <div class="mt-4 flex justify-end">
      <button type="submit" class="bg-blue-500 text-white p-2 rounded">追加</button>
    </div>
  </form>
</body>

</html>