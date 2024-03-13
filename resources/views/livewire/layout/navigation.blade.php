<nav
    x-bind:class="{
      '-translate-x-full': !mobileSidebarOpen,
      'translate-x-0': mobileSidebarOpen,
      'lg:-translate-x-full': !desktopSidebarOpen,
      'lg:translate-x-0': desktopSidebarOpen,
    }"
    id="page-sidebar"
    class="dark fixed bottom-0 left-0 top-0 z-50 flex h-full w-full -translate-x-full flex-col border-r border-gray-800 bg-gray-800 text-gray-200 transition-transform duration-500 ease-out lg:w-64 lg:translate-x-0"
    aria-label="Main Sidebar Navigation"
>
    <div
        class="flex h-16 w-full flex-none items-center justify-between px-4 lg:justify-center dark:bg-gray-600 dark:bg-opacity-25"
    >
        <a
            href="{{ route('index') }}"
            wire:navigate
            class="group inline-flex items-center space-x-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300"
        >
            <span>{{ config('app.name') }}</span>
        </a>
        <div class="lg:hidden">
            <button
                x-on:click="mobileSidebarOpen = false"
                type="button"
                class="inline-flex items-center justify-center space-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 dark:active:border-gray-700"
            >
                <svg
                    class="hi-mini hi-x-mark -mx-0.5 inline-block size-5"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                >
                    <path
                        d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z"
                    />
                </svg>
            </button>
        </div>
    </div>
    <div class="overflow-y-auto">
        <div class="w-full p-4">
            <nav class="space-y-1">
                <a
                    href="{{ route('index') }}"
                    wire:navigate
                    class="group flex items-center space-x-2 rounded-lg border border-teal-100 bg-teal-50 px-2.5 text-sm font-medium text-gray-900 dark:border-transparent dark:bg-gray-700/75 dark:text-white"
                >
                    <span
                        class="flex flex-none items-center text-teal-500 dark:text-gray-300"
                    >
                        <svg
                          class="hi-outline hi-home inline-block size-5"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25"
                            />
                        </svg>
                    </span>
                    <span class="grow py-2">Головна</span>
                </a>
                @auth
                    <livewire:get-operators />
                @endauth
            </nav>
        </div>
    </div>
</nav>
