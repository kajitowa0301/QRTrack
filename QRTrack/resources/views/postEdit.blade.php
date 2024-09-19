<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>サイト編集画面</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-header-component />
    <x-create-status-component />
    <x-guest-layout>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <x-textbox-component />
        </form>
        <div class="w-full">
            <div class=" flex w-4/5 justify-between items-center">
                <p>削除</p>
                <p>追加</p>
            </div>
        </div>
        <x-postbtn-component />
    </x-guest-layout>
</body>

</html>