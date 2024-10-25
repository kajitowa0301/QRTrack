<div class="my-4">
    <input type="hidden" name="id" value="{{$data->posts_id}}">
    <div
        class="flex flex-col mx-2 bg-white border shadow-sm rounded-xl p-1">
       <!-- QRコード画像 -->
        <img src="{{asset($data->img_path)}}" alt="">
        <!-- QRコード画像 -->
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">
                {{$title_content->details_title}}
            </h3>
            <p class="mt-1 text-gray-500">
                {{$title_content->details_content}}
            </p>
        </div>
        <div class=" flex justify-between">
            <div class="pl-1 w-1/2">
                <x-like-button-component :$id  />
            </div>
            <div class="w-1/3 flex justify-evenly">
                <!-- <x-share-button-component /> -->
                <x-delete-box :$id/>
            </div>
        </div>
    </div>
</div>