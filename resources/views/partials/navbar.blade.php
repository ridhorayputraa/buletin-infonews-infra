<nav class="bg-grey shadow-md">
    <div class="mx-auto  max-w-screen-2xl px-2 sm:px-6 lg:px-8">
        <div class="relative border border-redHeavy flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <button id="mobile-menu-button"
                    class="relative inline-flex items-center justify-center p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="flex  border-redHeavy  flex-1 items-center justify-center sm:justify-around sm:items-stretch">
                <div class="border border-redHeavy">
                    <a href="{{ url('/') }}">
                        <img class="" width="107px" src="{{ asset('images/Logo.svg') }}" alt="Informa story">
                        {{-- {{ $category }} --}}
                    </a>
                </div>
                <div class="hidden sm:ml-6 border border-redHeavy lg:flex flex-row sm:block">
                    <div class="flex space-x-4">
                        @foreach ($categories as $category)
                            <a href="{{ route('category.show', $category->slug) }}"
                                class="block px-4 py-2 font-poppins {{ request()->is('category/' . $category->slug) ? 'duration-300 font-medium text-redHeavy' : ' font-normal text-blackPrimary hover:text-redHeavy ' }}">
                                {{ $category->name }}
                            </a>
                        @endforeach



                        {{-- <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Services</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a> --}}
                    </div>

                </div>

                <div class="ml-5 flex w-[20%] items-center justify-between">
                    <input type="search"
                        class="relative m-0 block w-[1px] min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none motion-reduce:transition-none dark:border-neutral-500 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                        placeholder="Search" aria-label="Search" aria-describedby="button-addon2" />

                    <!--Search icon-->
                    <span
                        class="input-group-text flex items-center whitespace-nowrap rounded px-3 py-1.5 text-center text-base font-normal text-neutral-700 dark:text-neutral-200"
                        id="basic-addon2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>


            </div>
        </div>
    </div>
    <div class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium">Home</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">About</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Services</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contact</a>
        </div>
    </div>
</nav>
