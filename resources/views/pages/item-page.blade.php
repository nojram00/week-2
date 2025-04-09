<script>
    document.addEventListener('DOMContentLoaded', function() {
        const success = "{{ session('success') }}";

        if (success) {
            alert(success);
        }
    });
</script>

<x-main-layout>
    <x-container>
        <h1><a href="{{ route('shop') }}">Shop</a></h1>
        <div class="flex flex-col items-center gap-4 mt-5">
            <div class="flex-grow">
                <img src="/{{ $item->image }}" alt="{{ $item->name }}" class="w-80 object-cover rounded-t"/>
            </div>
            <div class="flex flex-col gap-2 p-4 items-baseline justify-center">
                <h1>
                    {{ $item->name }}
                </h1>
                <p>{{ $item->description }}</p>
                <p class="text-lg font-bold text-gray-800">
                    Price: ${{ number_format($item->price, 2) }}
                </p>
            </div>

            <div>
                <a href="{{ route('add-to-cart', $item->id )}}" class="bg-green-200 p-2 rounded-md shadow cursor-pointer">Add To Cart</a>
            </div>
        </div>
    </x-container>
</x-main-layout>
