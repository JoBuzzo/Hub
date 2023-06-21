<div class="max-w-full justify-center items-center pt-7">
    <div class="m-auto flex flex-col items-center justify-center  ">
        <div
            class="shadow-md first-letter:overflow-x-auto sm:rounded-lg max-xl:w-[700px] w-[1250px] max-sm:w-[360px] bg-white px-4 py-8 rounded-md">
            <div class="flex w-full items-center justify-between mb-4">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900">Imagens</h1>
                <livewire:create-image/>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Foto
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Deletar</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($images as $image)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            <img class="h-64" src="{{ $image->image }}" alt="">
                        </th>
                        <td class="space-x-2 text-left">
                            <livewire:delete-image :id="$image->id" :wire:key="time().$image->id"/>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
