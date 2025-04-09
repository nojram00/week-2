<x-main-layout>
    <div class="p-10">
        <h1>404 Not Found</h1>

        <div class="flex flex-col gap-10 mt-10">
            <div class="flex flex-col gap-5">
                <h2>Sorry, the page you are looking for does not exist.</h2>
                <p class="px-10">
                    You can go back to the <a href="{{ route('home') }}" class="text-blue-400 hover:underline">homepage</a> or check out our <a href="{{ route('shop') }}" class="text-blue-400 hover:underline">shop</a>.
                </p>
            </div>
        </div>
    </div>
</x-main-layout>