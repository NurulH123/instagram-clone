<div class="max-w-lg mx-auto">

    {{-- Header --}}
    <header class="flex items-center gap-3">

        <x-avatar src="https://source.unsplash.com/500x500?face" class="h-9 w-9"/>

        <div class="grid grid-cols-7 w-full gap-2">
            <div class="col-span-5">
                <h5 class="text-semibold truncate text-sm">{{ fake()->name }}</h5>
            </div>

            <div class="col-span-2 flex text-right justify-end">
                <button class="text-gray-500 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>


    {{-- Main --}}
    <main >

        <div class="my-2">
            <!-- Slider main container -->
            <div 
                x-init="
                    new Swiper($el, {
                        loop: true,
                        modules: [Navigation, Pagination],

                        pagination: {
                            el: '.swiper-pagination',
                        },

                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    })
                "
            class="swiper h-[500px] border bg-white">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><x-video /></div>
                    <div class="swiper-slide"><img src="https://cdn.pixabay.com/photo/2015/11/16/22/39/balloons-1046658_960_720.jpg" alt="" class="w-full h-[500px] block object-scale-down"></div>
                    <div class="swiper-slide">Slide 3</div>
                    
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>

    </main>

    {{-- Footer --}}
    <div class="flex gap-4 items-center py-2">
        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
            </svg>
        </span>

        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 20.25c4.97 0 9-3.694 9-8.25s-4.03-8.25-9-8.25S3 7.444 3 12c0 2.104.859 4.023 2.273 5.48.432.447.74 1.04.586 1.641a4.483 4.483 0 0 1-.923 1.785A5.969 5.969 0 0 0 6 21c1.282 0 2.47-.402 3.445-1.087.81.22 1.668.337 2.555.337Z" />
            </svg>
        </span>

        <span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="w-7 h-7 -rotate-45">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
            </svg>
        </span>

        <span class=" ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.9" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
            </svg>
        </span>
    </div>

    {{-- likes and views --}}
    <p class="text-sm font-bold">100,789 likes</p>

    {{-- name and comments --}}
    <div class="flex gap-2 text-sm font-medium py-1">
        <p><strong class="font-bold">{{ fake()->name }}</strong>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis quos dolore velit molestiae quas laborum unde magni provident voluptates animi?
        </p>
    </div>

    {{-- count comment --}}
    <button class="text-slate-500/90 text-sm font-medium py-2">View all 10 comments</button>

    {{-- comments --}}
    <form x-data="{inputText:''}" class="w-full grid grid-cols-12 items-center">
        @csrf
        <input x-model="inputText" type="text" class="px-1 rounded-lg border-0 col-span-10 outline-none placeholder:text-sm focus:outline-none hover:ring-0 right-0" placeholder="Leave a comment">

        <div class="col-span-1 flex ml-auto justify-end text-right">
            <button x-cloak x-show="inputText.length > 0" class="text-blue-500 font-semibold">
                Post
            </button>
        </div>

        <span class="col-span-1 ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 15.182a4.5 4.5 0 0 1-6.364 0M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
            </svg>
        </span>
    </form>
</div>
