<div class="px-4 mx-auto sm:px-6 lg:px-8">
    <form wire:submit.prevent='create'>
        <div class="flex flex-col justify-between w-full gap-6 md:flex-row md:items-end">
            
            <div class="w-full md:w-1/2">
                <label for="name" class="text-sm font-semibold dark:text-white">Nome do Projeto</label>
                <input type="text" wire:model='name' id="name"
                    class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">

                @error('name')
                    <span class="mt-2 text-xs font-medium text-red-600 dark:text-red-400">{{ $message }}</span>
                @enderror
            </div>

            <div class="w-full md:w-1/2">
                <label for="url" class="text-sm font-semibold dark:text-white">Url do Projeto</label>
                <input type="text" wire:model='url' id="url"
                    class="mt-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @error('url')
                    <span class="mt-2 text-xs font-medium text-red-600 dark:text-red-400">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="text-center">
                <x-button type="submit">Enviar</x-button>
            </div>
        </div>
    </form>
</div>
