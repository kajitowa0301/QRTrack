<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>投稿閲覧画面</title>

  @vite(['resources/css/app.css','resources/js/app.js']) <!-- ←これを書き込むことでTaileindCSSが導入できる -->
</head>
  <body class="">
    <x-header-component />
    <x-user-info-component />
      <div class=" mt-6 ml-4 font-medium text-xl text-black">
        <p>ものの名前</p>
      </div>
      <div class="flex justify-center items-center">
        <p class=" font-bold text-3xl">パソコン</p>
      </div>
      <x-list-component />
  </body>

</html>