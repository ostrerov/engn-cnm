<div
    x-cloak
    x-show="slideOverOpen"
    x-transition:enter="ease-in-out duration-500"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="ease-in-out duration-500"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    x-bind:aria-hidden="!slideOverOpen"
    x-on:created.window="!slideOverOpen"
    class="relative z-50" role="dialog" aria-modal="true"
>
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                <div
                    x-cloak
                    x-show="slideOverOpen"
                    x-transition:enter="transform transition ease-in-out duration-700 sm:duration-500"
                    x-transition:enter-start="translate-x-full"
                    x-transition:enter-end="translate-x-0"
                    x-transition:leave="transform transition ease-in-out duration-700 sm:duration-500"
                    x-transition:leave-start="translate-x-0"
                    x-transition:leave-end="translate-x-full"
                    x-bind:aria-hidden="!slideOverOpen"
                    class="pointer-events-auto relative w-96"
                >
                    <div
                        x-cloak
                        x-show="slideOverOpen"
                        x-transition:enter="ease-in-out duration-500"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in-out duration-500"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        x-bind:aria-hidden="!slideOverOpen"
                        class="absolute left-0 top-0 -ml-8 flex pr-2 pt-4 sm:-ml-10 sm:pr-4">
                        <button @click="slideOverOpen=!slideOverOpen" type="button" class="relative rounded-md text-gray-300 hover:text-white focus:outline-none focus:ring-2 focus:ring-white">
                            <span class="absolute -inset-2.5"></span>
                            <span class="sr-only">Close panel</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <!-- Slide-over panel, show/hide based on slide-over state. -->
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
