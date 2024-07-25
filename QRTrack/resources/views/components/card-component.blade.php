<div class="my-4">
    <div
        class="flex flex-col mx-2 bg-white border shadow-sm rounded-xl">
        <img class="w-full h-auto rounded-t-xl" src="/img/QRcode.jpg" alt="Image test">
        <div class="p-4 md:p-5">
            <h3 class="text-lg font-bold text-gray-800">
                パソコンの極意
            </h3>
            <p class="mt-1 text-gray-500">
                パソコンの使い方を教えます。
            </p>
        </div>
        <div class=" flex justify-between">
            <div class="pl-1 w-1/2">
                <x-like-button-component />
            </div>
            <div class="w-1/3 flex justify-evenly">
                <x-share-button-component />
                <x-delete-box />
            </div>
        </div>
    </div>
</div>