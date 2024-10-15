<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- ←これを書き込むことでTaileindCSSが導入できる -->
</head>

<body>
    <x-header-component />
    <div class=" w-full h-auto flex items-center justify-center mb-5">
        <div class="w-1/2">
            <h1 class="font-medium hover:text-gray-400 ml-4">ユーザー名変更</h1>
        </div>
        <div class="w-1/2 flex flex-col items-center">
            <p class=" mb-5 font-medium hover:text-gray-400">投稿数</p>
            <p class=" font-medium hover:text-gray-400">総いいね数</p>
        </div>
    </div>
    <div class="md:flex justify-center">
    <x-card-component />
    </div>
</body>

</html>