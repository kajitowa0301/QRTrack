<div class="w-full ">
    <!-- 大枠 -->
    <div class="mx-4 outline border-gray-400 outline-1 rounded-xl">
        <!-- タイトル -->
        <div class="flex justify-center items-center mt-4 text-xl font-medium">
            <p>{{ $detail->details_title }}</p>
        </div>
        <!-- 詳細情報 -->
        <div class="flex justify-center items-center text-l text-black font-normal">
            <p class="m-5">{{ $detail->details_content }}</p>
        </div>
        @if ($userid == Auth::id())
        <a href="{{route('detailEditForm',$detail->details_id)}}" class="flex justify-end">
            <x-edit-button-component />
        </a>
        @endif
    </div>
</div>