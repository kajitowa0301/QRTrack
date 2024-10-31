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
    <p class=" font-bold text-3xl">{{$datas->first()->posts_type}}</p>
  </div>
  <x-list-component :$postId/>
  @if ($usersId == Auth::id())
    <div class="w-1/3 flex justify-evenly">
      <x-postbtn-component />
    </div>
  @endif
  
</body>

</html>