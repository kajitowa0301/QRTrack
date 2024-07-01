<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  @vite(['resources/css/app.css','resources/js/app.js']) <!-- ←これを書き込むことでTaileindCSSが導入できる -->
</head>

  <body class="w-full h-full md:gra sm:bg-red-200 bg-blue-200">
    <x-header-component />
    <h1 class="text-7xl md:plugin sm:test text-green-200">
      Hello world!
    </h1>
  </body>

</html>