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
  @foreach ($datas as $detail)
    <div class="mt-4">
      @php
      dd($detail);
      @endphp
    <x-list-component :detail = "$detail"/>
    </div>
  @endforeach

  @if ($usersId == Auth::id())
    <div class="w-full flex justify-evenly">
      <a href="{{ route('postAddDetailForm', ['id' => $postId]) }}">
        <x-postbtn-component />
      </a>
    </div>
  @endif

</body>

</html>