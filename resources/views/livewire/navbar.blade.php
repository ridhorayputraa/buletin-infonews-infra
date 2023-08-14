<nav class="bg-grey shadow-md">
    <div class="mx-auto  max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
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
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="border border-red-500 ">
                    <img class="" width="107px" src="{{ asset('images/Logo.svg') }}" alt="Informa story">
                    {{-- {{ $category }} --}}
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        @foreach ($categories as $category)
                            <a href="{{ route('category.show', $category->slug) }}"
                                class="block px-4 py-2 @if ($category->name !== '/name') font-bold @endif">{{ $category->name }}</a>
                        @endforeach

                        {{-- <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Services</a>
                        <a href="#"
                            class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a> --}}
                    </div>
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
