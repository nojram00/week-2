@props([
    'image_src' => '',
    'image_alt' => 'Organization Image',
])

<div class="w-full h-screen relative">
    <div class="w-full h-full bg-gray-800/50 absolute"></div>
    <div class="flex-row items-baseline justify-around relative gap-3 z-10 h-full">
        <div class="flex flex-row gap-3 h-full items-center justify-center text-gray-800">
            <img src="{{ $image_src }}" alt="{{ $image_alt }}" class="p-10 max-w-md self-center rounded-lg"/>
            <div class="flex flex-col gap-3">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>