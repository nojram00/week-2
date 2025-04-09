@props([
    'item' => ''
])
<a href="{{ route('item', $item->id )}}" class="flex flex-col justify-center min-h-80 items-center p-10 gap-4 bg-white rounded shadow">
    <div class="flex-grow">
        <img src="{{ $item->image }}" alt="{{ $item->name }}" class="w-full h-80 object-cover rounded-t"/>
    </div>
    <div class="flex flex-col gap-2 p-4 items-baseline justify-center">
        <h1>
            {{ $item->name }}
        </h1>
        <p>{{ $item->description }}</p>
    </div>
</a>