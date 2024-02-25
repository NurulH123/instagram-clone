@props([
    'source' => 'https://cdn.devdojo.com/pines/videos/coast.mp4'
])

<div x-data={playing:false,muted:false}
    class="relative h-full w-full m-auto">

    <video x-ref="player" @play="playing=true" @pause="playing=false" class="h-full max-h-[500px] w-full">
        <source src="{{ $source }}" type="video/mp4">
        your browse does not supporthtml5 video
    </video>

    {{-- play --}}
    <div x-cloak x-show="!playing" @click="$refs.player.play()" class="absolute z-10 inset-0 flex items-center justify-center cursor-pointer">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill w-16 h-16 text-white" viewBox="0 0 16 16">
            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393"/>
        </svg>

    </div>

    {{-- pause --}}
    <div x-show="playing" @click="$refs.player.pause()" class="absolute z-10 inset-0 flex items-center justify-center cursor-pointer">

        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pause-fill w-16 h-16 text-white invisible" viewBox="0 0 16 16">
            <path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5m5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5"/>
        </svg>

    </div>

    {{-- muted --}}

    <div class="absolute top-2 right-2 bg-black rounded">

        {{-- muted --}}
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-volume-mute-fill w-4 h-4 text-white" viewBox="0 0 16 16">
            <path d="M6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06m7.137 2.096a.5.5 0 0 1 0 .708L12.207 8l1.647 1.646a.5.5 0 0 1-.708.708L11.5 8.707l-1.646 1.647a.5.5 0 0 1-.708-.708L10.793 8 9.146 6.354a.5.5 0 1 1 .708-.708L11.5 7.293l1.646-1.647a.5.5 0 0 1 .708 0"/>
        </svg>

        {{-- unmute --}}
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-volume-off-fill w-4 h-4 text-white" viewBox="0 0 16 16">
            <path d="M10.717 3.55A.5.5 0 0 1 11 4v8a.5.5 0 0 1-.812.39L7.825 10.5H5.5A.5.5 0 0 1 5 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06"/>
        </svg>
    </div>
    
</div>