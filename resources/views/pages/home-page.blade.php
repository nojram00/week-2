<x-main-layout>
    <div class="w-full h-screen relative" style="background: url('/images/background-new.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="w-full h-full bg-gray-800/50 absolute"></div>

        <div class="flex flex-col gap-3 items-center justify-center relative z-10 h-full text-white">
            <h1 class="hero-header">Welcome to {{ config('app.name') }}!</h1>
            <p class="hero-subtitle max-w-md">{{ config('app.description') }}</p>
        </div>
    </div>

    <x-home-container image_src="/images/cat-eating.jpg" image_alt="Cat">
        <h1 class="text-4xl font-bold text-white">About Us</h1>
        <p class="text-lg text-white max-w-md">We Offers Animal Food Supplies for your furry friends and babies</p>
        <a href="{{ route('about') }}" class="hover:underline text-white">Learn More</a>
    </x-home-container>

    <x-home-container image_src="/images/dog.jpg" image_alt="Cat">
        {{-- <h1 class="text-4xl font-bold text-white">About Us</h1> --}}
        <p class="text-lg text-white max-w-md">We Also Offers Pet Grooming!</p>
        <a href="{{ route('about') }}" class="hover:underline text-white">Learn More</a>
    </x-home-container>


    <div class="w-full h-screen relative bg-gray-100 p-10">
        <h1>Items</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 p-10">
            @foreach ($items as $item)
                <x-item-card :item="$item" />
            @endforeach
        </div>

        <div class="flex items-center justify-center mt-5">
            <a href="{{ route('shop') }}" class="bg-blue-300 px-1 py-2 rounded-md shadow">View More</a>
        </div>
    </div>

</x-main-layout>