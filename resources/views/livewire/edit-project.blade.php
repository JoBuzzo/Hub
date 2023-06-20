<div>
    <button class="font-medium text-blue-600 cursor-pointer dark:text-blue-500 hover:underline" x-data=''
        x-on:click.prevent="$dispatch('open-modal', 'edit-project{{ $project->id }}')">Editar</button>
    <x-modal name="edit-project{{ $project->id }}">
        <div class="relative p-6 text-gray-800 dark:text-white">

            <div class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                x-on:click="$dispatch('close')">

                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>

            <form wire:submit.prevent='edit'>
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
    </x-modal>
</div>
