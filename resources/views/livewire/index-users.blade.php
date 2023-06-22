<div class="items-center justify-center max-w-full pt-7">
    <div class="flex flex-col items-center justify-center m-auto ">
        <div class="shadow-md first-letter:overflow-x-auto sm:rounded-lg max-xl:w-[700px] w-[1250px] max-sm:w-[360px] bg-white px-4 py-8 rounded-md">
            <div class="flex items-center justify-between w-full mb-4">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900">Usuários</h1>
                {{-- <livewire:create-user/> --}}
                <x-primary-button>
                    <a href="{{ route('create-user') }}">Adicionar</a>
                </x-primary-button>
            </div>
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nome
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr class="bg-white border-b">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $user->name }}
                        </th>
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            {{ $user->email }}
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

