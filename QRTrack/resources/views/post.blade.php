<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>投稿画面</title>

  @vite(['resources/css/app.css','resources/js/app.js']) <!-- ←これを書き込むことでTaileindCSSが導入できる -->
  <link rel="icon" href="{{asset('img/favicon.ico')}}">
</head>
  <body class="w-full">
    <x-header-component />
    <div class="px-4 sm:px-6 md:px-8 lg:px10 xl:px-12 mx-auto mt-4">
        <x-user-info-component />
      <form method="POST" action="{{ route('postStore') }}">
        @csrf
        <x-textbox-component />
        <x-postbtn-component />
      </form>
    </div>
  </body>

</html>