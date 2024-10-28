<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  @vite(['resources/css/app.css','resources/js/app.js']) <!-- ←これを書き込むことでTaileindCSSが導入できる -->
</head>
  <body class="w-full h-full">
    <x-header-component />
    <div class="w-auto h-auto">
    <x-card-component />
  </body>
</html>