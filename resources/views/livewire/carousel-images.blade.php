<div class="max-xl:w-[700px] w-[1250px] max-sm:w-[360px] flex flex-col pt-7">
    <div id="imagens" class="flex w-full gap-2 p-4 mt-8 mb-8">
        <div class="border-2 border-[#04DBFD] "></div>
        <h5 class="text-2xl font-bold tracking-tight text-gray-900 ">Imagens</h5>
    </div>
    <div class="flex overflow-x-scroll snap-center">
        @foreach ($images as $image)
            <div class="relative h-80 ">
                <img class="object-cover max-w-sm mb-2 ml-2 rounded-lg h-80 " src="{{ $image->image }}"
                    alt="{{  $image->image }}">
            </div>
        @endforeach
    </div>
</div>
