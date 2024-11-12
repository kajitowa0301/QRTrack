<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- ←これを書き込むことでTaileindCSSが導入できる -->
</head>

<body class="w-full h-full gra">
  <x-header-component />
  @if (session('message'))
    <div class=" text-red-400 font-bold">
      {{ session('message') }}
    </div>
  @endif
  <div class=" w-full flex">
        <div class="flex flex-wrap">
          @if ($datas->isEmpty())
            <div class="text-2xl font-bold text-center w-full">
              投稿がありません
            </div>
          @else
          @foreach ($datas as $data)
                    <x-card-component :data="$data->posts_id" />
            @endforeach
          @endif
        </div>
   </div>     
</body>

</html>