<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>投稿画面</title>

  @vite(['resources/css/app.css','resources/js/app.js']) <!-- ←これを書き込むことでTaileindCSSが導入できる -->
</head>
  <body class="w-full">
    <x-header-component />
    <div class="max-w-2xl mx-auto mt-4">
        <x-user-info-component />
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <x-textbox-component />
      </form>
      <x-postbtn-component />
    </div>
  </body>

</html>