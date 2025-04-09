<x-main-layout class="">
    <div class="p-4 bg-gray-100 h-full relative w-full">
        <h1>About Us</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-5">
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-bold">Our Mission</h2>
                <p>To provide the best service possible.</p>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-bold">Our Vision</h2>
                <p>To be the leading company in our industry.</p>
            </div>
        </div>

        <h1 class="text-center mt-5">Teams</h1>
        <div class="grid grid-cols-2 gap-4 p-10 rounded shadow bg-gray-200 mt-3">

            <x-team-container>
                <img src="/profiles/image1.jpg" class="w-80"/>
                <div>
                    <h2 class="text-xl font-bold">Mary Grace Piattos</h2>
                    <p class="text-gray-500">CEO</p>
                </div>
            </x-team-container>

            <x-team-container>
                <img src="/profiles/image2.jpg" class="w-80"/>
                <div>
                    <h2 class="text-xl font-bold">Pia Piattos Lim</h2>
                    <p class="text-gray-500">COO</p>
                </div>
            </x-team-container>

            <x-team-container>
                <img src="/profiles/image3.jpg" class="w-80"/>
                <div>
                    <h2 class="text-xl font-bold">Xiaome Ocho</h2>
                    <p class="text-gray-500">Head - Research and Development</p>
                </div>
            </x-team-container>

            <x-team-container>
                <img src="/profiles/image4.webp" class="w-80"/>
                <div>
                    <h2 class="text-xl font-bold">Fernan Amuy</h2>
                    <p class="text-gray-500">Head - Marketing</p>
                </div>
            </x-team-container>
        </div>
    </div>
</x-main-layout>