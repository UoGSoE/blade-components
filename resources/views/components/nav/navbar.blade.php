<nav class="bg-uogblue-600" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" class="inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false" @click="open = !open">
                    <span class="sr-only">Open main menu</span>
                    <svg class="block h-6 w-6" :class="{ 'hidden': open, 'block': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <svg class="hidden h-6 w-6" :class="{ 'block': open, 'hidden': !(open) }" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            {{ $slot }}
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="sm:hidden" id="mobile-menu" x-show="open">
        <div class="space-y-1 px-2 pb-3 pt-2">
            <a
                x-data="{ active: {{ request()->routeIs('platform.index') ? 'true' : 'false' }} }"
                href="{{ route('platform.index') }}"
                class=" hover:bg-uogblue-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                :class="{ 'bg-uogblue-900 text-white' : active, 'text-uogblue-100' : !(active) }">
                Platforms
            </a>
            <a
                x-data="{ active: {{ request()->routeIs('endUser.index') ? 'true' : 'false' }} }"
                href="{{ route('endUser.index') }}"
                class="hover:bg-uogblue-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                :class="{ 'bg-uogblue-900 text-white' : active, 'text-uogblue-100' : !(active) }">
                End Users
            </a>
            <a
                x-data="{ active: {{ request()->routeIs('availability.index') ? 'true' : 'false' }} }"
                href="{{ route('availability.index') }}"
                class="hover:bg-uogblue-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                :class="{ 'bg-uogblue-900 text-white' : active, 'text-uogblue-100' : !(active) }">
                Availabilities
            </a>
            <a
                x-data="{ active: {{ request()->routeIs('tag.index') ? 'true' : 'false' }} }"
                href="{{ route('tag.index') }}"
                class="text-white hover:bg-uogblue-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                :class="{ 'bg-uogblue-900 text-white' : active, 'text-uogblue-100' : !(active) }">
                Tags
            </a>
            <a
                x-data="{ active: {{ request()->routeIs('admin.index') ? 'true' : 'false' }} }"
                href="{{ route('admin.index') }}"
                class="text-white hover:bg-uogblue-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium"
                :class="{ 'bg-uogblue-900 text-white' : active, 'text-uogblue-100' : !(active) }">
                Admins
            </a>
        </div>
        <div class="border-t border-uogblue-400 pb-3 pt-3 space-y-1 px-2 sm:px-3">
            @livewire('logout')
        </div>
    </div>
</nav>
