<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="border flex flex-col bg-white lg:h-[500px] px-5 gap-y-4">

        <header class="w-full py-2 border-b">
            <div class="flex justify-between">

                <button wire:click="$dispatch('closeModal')" class="font-bold">
                    X
                </button>
    
                <div class="font-bold text-lg">
                    Create New Post
                </div>

                <button class="text-blue-500">
                    Share
                </button>
            </div>
        </header>

        <main class="grid grid-cols-12 gap-3 w-full h-full overflow-hidden">

            <aside class="lg:col-span-7 items-center m-auto w-full overflow-scroll">

                <label for="customFile" class="m-auto max-w-fit cursor-pointer flex flex-col gap-3">
                    <input type="file" id="customFile" multiple accept=".jpg,.png,.jpeg" class="hidden">

                    <span class="m-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 15.75 5.159-5.159a2.25 2.25 0 0 1 3.182 0l5.159 5.159m-1.5-1.5 1.409-1.409a2.25 2.25 0 0 1 3.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 0 0 1.5-1.5V6a1.5 1.5 0 0 0-1.5-1.5H3.75A1.5 1.5 0 0 0 2.25 6v12a1.5 1.5 0 0 0 1.5 1.5Zm10.5-11.25h.008v.008h-.008V8.25Zm.375 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>
                    </span>

                    <span class="bg-blue-500 text-white text-sm rounded-lg p-2 px-4">
                        Upload Files From Computer
                    </span>
                </label>

                <div class="
                {{-- flex  --}} hidden
                overflow-x-scroll snap-x snap-mandatory w-[500px] h-96 gap-2 px-2">
                    
                    <div class="w-full h-full shrink-0 snap-always snap-center">
                        <x-video />
                    </div>

                    <div class="w-full h-full shrink-0 snap-always snap-center">
                        <img src="https://unsplash.com/photos/a-group-of-people-walking-down-a-street-holding-umbrellas-RJk8zx1_uMg" alt="photo">
                    </div>
                </div>

            </aside>

            <aside class="lg:col-span-5 border-l p-3 h-full flex flex-col grap-4 overflow-hidden">

            </aside>

        </main>
    </div>
</div>
