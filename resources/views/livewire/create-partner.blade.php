<div>
    <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 focus:ring-2  focus:ring-offset-2  transition ease-in-out duration-150" x-data=''
            x-on:click.prevent="$dispatch('open-modal', 'create-partner')">Adicionar</button>
    <x-modal name="create-partner">
        <div class="relative p-6 text-gray-800">
            <div class="w-full flex justify-end">
                <div class="cursor-pointer text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex mb-2"
                     x-on:click="$dispatch('close')">

                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                </div>
            </div>

            <form wire:submit.prevent='create'>
                <div class="flex items-center justify-between">
                    <h2 class="mb-4 text-3xl font-bold">Parceiros</h2>
                </div>
                <div class="flex flex-col items-end w-ful">
                    <div
                        class="flex flex-col items-center w-full gap-8 justify-center">
                        <div class="flex flex-col justify-between w-full gap-5 md:w-1/2">
                            <div>
                                <p class="text-sm font-semibold">Imagem</p>
                                <div class="relative flex items-center w-full mt-3 h-96">
                                    <label for="image"
                                           class="flex flex-col items-center justify-center w-full h-full border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                                        <div
                                            class="z-10 flex flex-col items-center justify-center pt-5 pb-6">
                                            @if (isset($image))
                                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400"
                                                     fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                    </path>
                                                </svg>
                                                <div>
                                                    <p class="mb-2 text-sm text-gray-400">
                                                <span class="font-semibold">Clique para fazer
                                                    upload</span>
                                                    </p>
                                                    <p class="text-xs text-center text-gray-400">
                                                        SVG, PNG, JPG
                                                    </p>
                                                </div>
                                            @else
                                                <svg aria-hidden="true"
                                                     class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                                     stroke="currentColor" viewBox="0 0 24 24"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2"
                                                          d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                    </path>
                                                </svg>
                                                <div>
                                                    <p
                                                        class="mb-2 text-sm text-gray-500">
                                                <span class="font-semibold">Clique para fazer
                                                    upload</span>
                                                    </p>
                                                    <p class="text-xs text-center text-gray-500">
                                                        SVG, PNG,
                                                        JPG
                                                    </p>
                                                </div>
                                            @endif
                                        </div>
                                        <input wire:model="image" id="image" type="file"
                                               class="hidden" />
                                        @isset($image)
                                            <img class="absolute object-scale-down w-full h-full brightness-50"
                                                 src="{{ $image->temporaryUrl() }}" alt="">
                                        @endisset
                                    </label>
                                </div>
                                @error('image')
                                <span class="mt-2 text-xs font-medium text-red-600">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>


                    </div>
                </div>
                <div class="w-full text-center">
                    <button type="reset"
                            class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Cancelar
                    </button>
                    <button
                        class="disable mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5"
                        type="submit">
                        Confirmar
                    </button>
                </div>
            </form>
        </div>
    </x-modal>
</div>

