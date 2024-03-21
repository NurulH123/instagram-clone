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

            {{-- media --}}
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

            {{-- side details --}}
            <aside class="lg:col-span-5 border-l p-3 h-full flex flex-col grap-4 overflow-hidden">
                <div class="flex items-center gap-2">
                    <x-avatar class="w-9 h-9" />
                    <h5 class="font-bold">{{ fake()->name }}</h5>
                </div>

                <div class="">
                    <textarea 
                    placeholder="Add a caption"
                    class="border-0 focus:border-0 px-0 w-full rounded bg-white h-32 focus:outline-none focus:ring-0"
                    id=""></textarea>
                </div>

                <div class="w-full item-center">
                    <input 
                    placeholder="Add location"
                    type="text" 
                    class="border-0 focus:border-0 px-0 w-full rounded bg-white focus:outline-none focus:ring-0">
                </div>

                <div class="">
                    <h6 class="text-gray-500 font-medium text-base">Advanced  Settings</h6>

                    <ul>
                        <li>
                            <div class="flex item-center gap-3 justify-between">
                                <span>Hide like and view counts on this post</span>

                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                                </label>
  
                            </div>
                        </li>
                        <li>
                            <div class="flex item-center gap-3 justify-between">
                                <span>Turn off commenting</span>

                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300"></span>
                                </label>
  
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>

        </main>
    </div>
</div>
