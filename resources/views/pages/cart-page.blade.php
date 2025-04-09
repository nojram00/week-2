<x-main-layout>
    <h1 class="p-10">{{ auth()->user()->name }}'s Cart</h1>

    @if($cartItems->isEmpty())
        <div class="p-10">
            <p>Your cart is empty.</p>
        </div>
    @endif

    <div class="p-10 flex flex-col gap-10">
        @foreach ($cartItems as $item)
            <x-item-cart-container :item="$item->item"/>
        @endforeach
    </div>
</x-main-layout>
