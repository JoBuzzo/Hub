<div>
    <button class="font-medium text-red-600 cursor-pointer  hover:underline" x-data=''
            x-on:click.prevent="$dispatch('open-modal', 'delete-project{{ $project->id }}')">Deletar
    </button>
    <x-modal name="delete-project{{ $project->id }}">
        <div class="relative p-6 text-gray-800 ">
            <div class="w-full flex justify-end">
                <div
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center"
                    x-on:click="$dispatch('close')">

                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>

            <form wire:submit.prevent='delete'>
                <div class="p-6 text-center">
                    <svg aria-hidden="true" class="mx-auto mb-4 text-gray-400 w-14 h-14" fill="none"
                         stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500">Tem certeza que deseja excluir esse projeto?</h3>
                    <x-button color="red" type="submit">Enviar</x-button>

                    <button x-on:click="$dispatch('close')" type="button"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">
                        Cancelar
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
</div>
