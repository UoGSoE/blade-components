<div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
    <div x-show="open" x-transition:enter="transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div x-show="open" class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 left-0 flex max-w-full pr-10">
                <div x-show="open" @click.away="open = false" x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="pointer-events-auto w-screen max-w-md">
                    <div class="flex h-full flex-col overflow-y-scroll bg-white px-2 py-6 shadow-xl">
                        <div class="px-4 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-base font-semibold leading-6 text-gray-900" id="slide-over-title">Filter</h2>
                                <div class="ml-3 flex h-7 items-center">
                                    <button x-on:click="open = ! open" type="button" class="rounded-md bg-white text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                        <span class="sr-only">Close panel</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
