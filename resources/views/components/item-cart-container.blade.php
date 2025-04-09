
<div class="flex flex-row items-baseline justify-between px-4 bg-gray-300 shadow py-5 rounded-2xl">
    <div class="flex flex-row gap-10 justify-between">
        <div class="flex flex-col gap-4 flex-grow">
            <h1>{{ $item->name }}</h1>
            <p>${{ $item->price }}</p>
        </div>

        <div class="bg-white p-3 rounded-2xl shadow">
            <img src="/{{ $item->image }}" alt="{{ $item->name }}" class="w-20 h-20 object-cover rounded-t"/>
        </div>
    </div>

    <div>
        <a href="{{ route('checkout', $item->id )}}" class="bg-green-400 px-3 py-4 rounded-2xl shadow cursor-pointer">Checkout</a>
    </div>
</div>