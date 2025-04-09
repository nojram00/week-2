<script>
    document.addEventListener('DOMContentLoaded', function() {
        const success = "{{ session('success') }}";
        const error = "{{ session('error') }}";

        if (error) {
            alert(error);
        }

        if (success) {
            alert(success);
        }
    });
</script>

<x-main-layout>
    <x-container>
        <h1>Shop</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-5">
            @foreach($items as $item)
                <x-item-card :item="$item"/>
            @endforeach
        </div>

        <div class="mt-6">
            {{ $items->links() }}
        </div>
    </x-container>
</x-main-layout>
