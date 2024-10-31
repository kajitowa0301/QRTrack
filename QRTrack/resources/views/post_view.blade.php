<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>投稿閲覧画面</title>

  @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- ←これを書き込むことでTaileindCSSが導入できる -->
</head>
<body>
  <x-header-component />
  <div class=" mt-6 ml-4 font-medium text-xl text-black">
    <p>ものの名前</p>
  </div>
  <div class="flex justify-center items-center">
    <p class=" font-bold text-3xl">{{ $postsType }}</p>
  </div>
  <x-list-component :$postId/>
  @foreach ($datas as $detail)
    <div class="mt-4">
      <h3 class="text-lg font-bold text-gray-800">{{ $detail->details_title }}</h3>
      <p class="mt-1 text-gray-500">{{ $detail->details_content }}</p>
    </div>
  @endforeach
  @if ($usersId == Auth::id())
    <div class="w-1/3 flex justify-evenly">
      <a href="{{ route('postAddDetailForm', ['id' => $postId]) }}">
        <x-postbtn-component />
      </a>  
    </div>
  @endif
  
</body>

</html>