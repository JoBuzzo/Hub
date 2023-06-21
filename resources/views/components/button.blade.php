@props([
    'type',
    'color' => 'blue'
])

@if ($color === 'blue')
    <button type="{{ $type }}"
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  focus:outline-none">
        {{ $slot }}
    </button>
@endif

@if ($color === 'red')
    <button type="{{ $type }}"
        class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5  focus:outline-none ">
        {{ $slot }}
    </button>
@endif
