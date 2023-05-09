<div x-show="show" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <!-- Modal backdrop -->
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
        x-show="show"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        ></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
            <div
                @isset($closeFunction)
                    @click.away="$wire.call('{{ $closeFunction }}');"
                @else
                    @click.away="show = false"
                @endisset
                x-show="show"
                class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">

                <!-- Modal header -->
                @isset($title)
                <div class="flex items-start justify-between pt-4 pl-4 pr-4 pb-0 rounded-t">
                    <h3 class="mt-1 ml-2 text-xl font-semibold text-gray-900">
                    {{ $title }}
                    </h3>
                    <button
                        @isset($closeFunction)
                            @click="$wire.call('{{ $closeFunction }}');"
                        @else
                            @click="show = false"
                        @endisset
                        type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="defaultModal">
                        <span class="sr-only">Close modal</span>
                        <x-icon.close></x-icon.close>
                    </button>
                </div>
                @endisset

                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    {{ $slot}}
                </div>

                <!-- Modal footer -->
                @isset($footer)
                    <div class="items-center p-6 border-t border-gray-200 rounded-b">
                        {{ $footer }}
                    </div>
                @endisset
            </div>
        </div>
    </div>
</div>
