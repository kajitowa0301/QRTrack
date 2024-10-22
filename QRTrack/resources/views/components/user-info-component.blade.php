<div class = "w-full">
  <div class="w-full grid grid-cols-2 grid-rows-1">
    <div class="w-full col-span-1 row-span-2 ml-4 flex flex-col items-center">
      <div class ="text-gray-400">作成者</div>
      <div class =" text-gray-400 text-lg mt-3">{{Auth::user()->users_name }}</div>
    </div>
    <div class="w-full col-span-1 row-span-2 flex flex-col items-center">
      <div class ="text-gray-400 ">作成日</div>
      <div class =" text-gray-400 text-lg mt-3">{{ \Carbon\Carbon::now()->format('Y/m/d') }}</div>
    </div>
  </div>
</div>