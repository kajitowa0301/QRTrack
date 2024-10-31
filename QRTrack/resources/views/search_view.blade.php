<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>検索結果</title>

  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="w-full">
  <x-header-component />
  <form method = "POST" action = "{{ route('search') }}" class="my-4 flex justify-center">
    @csrf
      <input type = "text" name = "keyword" class="border-2 border-gray-400 rounded-lg w-9/12 mr-10" placeholder="🔍キーワードを入力">
      <button type="submit" class="bg-blue-200 text-black p-2 rounded ml-2">検索</button>
  </form>
  <div class="px-4 sm:px-6 md:px-8 lg:px10 xl:px-12 mx-auto mt-4">
    <!-- 検索キーワードを表示 -->
    <h1 class="text-2xl font-bold mb-4">検索結果: "{{ $query }}"</h1> 

    @if($results->isEmpty())
      <p>結果が見つかりませんでした。</p>
    @else
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach($results as $result)
          <x-card-component :data="$result" />
        @endforeach
      </div>
    @endif
  </div>
</body>

</html>