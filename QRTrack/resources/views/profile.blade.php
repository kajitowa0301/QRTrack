<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>プロフィール</title>

  @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="w-full gra">
  <x-header-component />
  @if (session('message'))
    <div class=" text-red-400 font-bold">
      {{ session('message') }}
    </div>
  @endif
  <div class="w-full h-auto flex items-center justify-center mb-5">
    <div class="w-1/2">
        <h1 class="font-medium hover:text-gray-400 ml-4" id="changeNameButton">ユーザー名変更</h1>
    </div>
    <div class="w-1/2 flex flex-col items-center">
      <p class="mb-5 font-medium hover:text-gray-400">名前：{{ Auth::user()->users_name }}</p>
      <p class="font-medium hover:text-gray-400">投稿数：{{ $postCount->count() }}</p>
    </div>
  </div>
  <div class=" w-full flex">
        <div class="flex flex-wrap">
            @foreach ($datas as $data)
                    <x-card-component :data="$data" />
            @endforeach
        </div>
   </div>

  <!-- モーダル -->
  <div id="nameChangeModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden z-50">
    <div class="bg-white p-6 rounded shadow-lg">
      <h2 class="text-xl font-bold mb-4">名前の変更</h2>
      <form method="POST" action="{{ route('profile.nameupdate') }}">
        @csrf
        @method('PATCH')
        <div class="mb-4">
          <label for="newname" class="block text-sm font-medium text-gray-700">新しい名前</label>
          <input type="text" name="newname" id="newname" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
        </div>
        <div class="flex justify-end">
          <button type="button" id="closeModalButton" class="bg-gray-500 text-white p-2 rounded mr-2">キャンセル</button>
          <button type="submit" class="bg-blue-500 text-white p-2 rounded">変更</button>
        </div>
      </form>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var changeNameButton = document.getElementById('changeNameButton');
      var closeModalButton = document.getElementById('closeModalButton');
      var nameChangeModal = document.getElementById('nameChangeModal');

      if (changeNameButton && closeModalButton && nameChangeModal) {
        changeNameButton.addEventListener('click', function() {
          nameChangeModal.classList.remove('hidden');
        });

        closeModalButton.addEventListener('click', function() {
          nameChangeModal.classList.add('hidden');
        });
      }
    });
  </script>
</body>

</html>