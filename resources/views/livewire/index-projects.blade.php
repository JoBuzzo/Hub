<div class="relative shadow-md first-letter:overflow-x-auto sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <caption class="p-5 text-lg font-semibold text-left text-gray-900 bg-white dark:text-white dark:bg-gray-800">
            Projetos
        </caption>
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3">
                    Url
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $project->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $project->url }}
                    </td>
                    <td class="space-x-2 text-left">
                        
                            <livewire:edit-project :id="$project->id" :wire:key="time().$project->id">
                            <livewire:delete-project :id="$project->id" :wire:key="time().$project->id">
                            
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
