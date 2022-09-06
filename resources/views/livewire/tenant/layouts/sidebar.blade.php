<aside id="menu" class="lg:flex flex-col flex hidden fixed z-50 h-full top-0 left-0 flex-shrink-0 w-64 bg-gray-100 dark:bg-gray-800">
    <button class="flex-shrink-0 relative text-sm focus:outline-none group">
        <div class="flex items-center justify-between w-full h-16 px-4">
            <a href="#" class="flex items-center">
                <img src="{{ asset('images/logo.svg') }}" class="mr-3 h-6 sm:h-7" alt="Flowbite Logo" />
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
        </div>
    </button>
    <div class="h-0 overflow-auto flex-grow">
        <div class="mt-3">
            @livewire('tenant.layouts.menu')
        </div>
    </div>
</aside>
