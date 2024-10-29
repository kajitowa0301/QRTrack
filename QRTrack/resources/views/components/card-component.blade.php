<div class="my-4">
    <input type="hidden" name="id" value="{{$data->posts_id}}">
    <div class="flex flex-col mx-2 bg-white border shadow-sm rounded-xl p-1
     lg:w-52
     md:mx-auto md:w-52 
     sm:w-52 sm:mx-auto xs:w-44 xs:mx-auto">
       <!-- QRコード画像 -->
        <img class="w-64 h-64;lg:w-60 h-60; md:w-52 h-52; sm:w-52 sm:h-52" src="{{asset($data->img_path)}}" alt="">
        <!-- QRコード画像 -->
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">
                {{$data->posts_type}}
            </h3>
            <p class="mt-1 text-gray-500">
                {{$data->details_title}}
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