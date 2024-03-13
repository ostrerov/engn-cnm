<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component
{
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<header
    x-bind:class="{
      'lg:pl-64': desktopSidebarOpen
    }"
    id="page-header"
    class="fixed left-0 right-0 top-0 z-30 flex h-16 flex-none items-center bg-white shadow-sm lg:pl-64 dark:bg-gray-800"
>
    <div class="mx-auto flex w-full max-w-10xl justify-between px-4 lg:px-8">
        <div class="flex items-center space-x-2">
            <div class="hidden lg:block">
                <button
                    x-on:click="desktopSidebarOpen = !desktopSidebarOpen"
                    type="button"
                    class="inline-flex items-center justify-center space-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 dark:active:border-gray-700"
                >
                    <svg
                        class="hi-solid hi-menu-alt-1 inline-block size-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </button>
            </div>
            <div class="lg:hidden">
                <button
                    x-on:click="mobileSidebarOpen = !mobileSidebarOpen"
                    type="button"
                    class="inline-flex items-center justify-center space-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 dark:active:border-gray-700"
                >
                    <svg
                        class="hi-solid hi-menu-alt-1 inline-block size-5"
                        fill="currentColor"
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </button>
            </div>
        </div>
        <div class="flex items-center lg:hidden">
            <a
                href="javascript:void(0)"
                class="group inline-flex items-center space-x-2 text-lg font-bold tracking-wide text-gray-900 hover:text-gray-600 dark:text-gray-100 dark:hover:text-gray-300"
            >
                <svg
                    class="hi-mini hi-cube-transparent inline-block size-5 text-teal-600 transition group-hover:scale-110 dark:text-teal-400"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                >
                    <path
                        fill-rule="evenodd"
                        d="M9.638 1.093a.75.75 0 01.724 0l2 1.104a.75.75 0 11-.724 1.313L10 2.607l-1.638.903a.75.75 0 11-.724-1.313l2-1.104zM5.403 4.287a.75.75 0 01-.295 1.019l-.805.444.805.444a.75.75 0 01-.724 1.314L3.5 7.02v.73a.75.75 0 01-1.5 0v-2a.75.75 0 01.388-.657l1.996-1.1a.75.75 0 011.019.294zm9.194 0a.75.75 0 011.02-.295l1.995 1.101A.75.75 0 0118 5.75v2a.75.75 0 01-1.5 0v-.73l-.884.488a.75.75 0 11-.724-1.314l.806-.444-.806-.444a.75.75 0 01-.295-1.02zM7.343 8.284a.75.75 0 011.02-.294L10 8.893l1.638-.903a.75.75 0 11.724 1.313l-1.612.89v1.557a.75.75 0 01-1.5 0v-1.557l-1.612-.89a.75.75 0 01-.295-1.019zM2.75 11.5a.75.75 0 01.75.75v1.557l1.608.887a.75.75 0 01-.724 1.314l-1.996-1.101A.75.75 0 012 14.25v-2a.75.75 0 01.75-.75zm14.5 0a.75.75 0 01.75.75v2a.75.75 0 01-.388.657l-1.996 1.1a.75.75 0 11-.724-1.313l1.608-.887V12.25a.75.75 0 01.75-.75zm-7.25 4a.75.75 0 01.75.75v.73l.888-.49a.75.75 0 01.724 1.313l-2 1.104a.75.75 0 01-.724 0l-2-1.104a.75.75 0 11.724-1.313l.888.49v-.73a.75.75 0 01.75-.75z"
                        clip-rule="evenodd"
                    />
                </svg>
                <span class="hidden sm:inline">Company</span>
            </a>
        </div>
        <div class="flex items-center space-x-2">
            <div class="relative inline-block">
                <button
                    x-on:click="themeDropdownOpen = true"
                    x-bind:aria-expanded="themeDropdownOpen"
                    type="button"
                    id="theme-dropdown"
                    class="inline-flex items-center justify-center space-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 dark:active:border-gray-700"
                    aria-haspopup="true"
                >
                    <span id="darkModeFeedbackIcon"></span>
                </button>
                <div
                    x-cloak
                    x-show="themeDropdownOpen"
                    x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-90"
                    x-on:click.outside="themeDropdownOpen = false"
                    role="menu"
                    aria-labelledby="theme-dropdown"
                    class="absolute -left-10 z-10 mt-2 w-32 origin-top rounded-lg shadow-xl focus:outline-none dark:shadow-slate-900"
                >
                    <div
                        class="divide-y divide-slate-100 rounded-lg bg-white ring-1 ring-black ring-opacity-5 dark:divide-slate-700 dark:bg-slate-900 dark:ring-slate-700"
                        role="none">
                        <div class="space-y-1 p-1.5" role="none">
                            <button type="button"
                                    data-toggle="dark-mode" data-preference="off"
                                    class="group flex w-full items-center gap-2 rounded-lg border border-transparent px-2 py-1.5 text-left text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-800 active:border-blue-100 dark:text-slate-200 dark:hover:bg-slate-800/75 dark:hover:text-white dark:active:border-slate-600"
                                    id="headlessui-menu-item-9" role="menuitem" tabindex="-1" data-headlessui-state="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true" data-slot="icon"
                                     class="inline-block size-5 flex-none opacity-25 group-hover:opacity-50">
                                    <path
                                        d="M10 2a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 2ZM10 15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5A.75.75 0 0 1 10 15ZM10 7a3 3 0 1 0 0 6 3 3 0 0 0 0-6ZM15.657 5.404a.75.75 0 1 0-1.06-1.06l-1.061 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM6.464 14.596a.75.75 0 1 0-1.06-1.06l-1.06 1.06a.75.75 0 0 0 1.06 1.06l1.06-1.06ZM18 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 18 10ZM5 10a.75.75 0 0 1-.75.75h-1.5a.75.75 0 0 1 0-1.5h1.5A.75.75 0 0 1 5 10ZM14.596 15.657a.75.75 0 0 0 1.06-1.06l-1.06-1.061a.75.75 0 1 0-1.06 1.06l1.06 1.06ZM5.404 6.464a.75.75 0 0 0 1.06-1.06l-1.06-1.06a.75.75 0 1 0-1.061 1.06l1.06 1.06Z"></path>
                                </svg>
                                <span class="grow">Light</span></button>
                            <button type="button"
                                    data-toggle="dark-mode" data-preference="on"
                                    class="group flex w-full items-center gap-2 rounded-lg border border-transparent px-2 py-1.5 text-left text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-800 active:border-blue-100 dark:text-slate-200 dark:hover:bg-slate-800/75 dark:hover:text-white dark:active:border-slate-600"
                                    id="headlessui-menu-item-10" role="menuitem" tabindex="-1" data-headlessui-state="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true" data-slot="icon"
                                     class="inline-block size-5 flex-none opacity-25 group-hover:opacity-50">
                                    <path fill-rule="evenodd"
                                          d="M7.455 2.004a.75.75 0 0 1 .26.77 7 7 0 0 0 9.958 7.967.75.75 0 0 1 1.067.853A8.5 8.5 0 1 1 6.647 1.921a.75.75 0 0 1 .808.083Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="grow">Dark</span></button>
                            <button type="button"
                                    data-toggle="dark-mode" data-preference="system"
                                    class="group flex w-full items-center gap-2 rounded-lg border border-transparent px-2 py-1.5 text-left text-sm font-medium text-slate-700 hover:bg-blue-50 hover:text-blue-800 active:border-blue-100 dark:text-slate-200 dark:hover:bg-slate-800/75 dark:hover:text-white dark:active:border-slate-600"
                                    id="headlessui-menu-item-11" role="menuitem" tabindex="-1" data-headlessui-state="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                     aria-hidden="true" data-slot="icon"
                                     class="inline-block size-5 flex-none opacity-25 group-hover:opacity-50">
                                    <path fill-rule="evenodd"
                                          d="M2 4.25A2.25 2.25 0 0 1 4.25 2h11.5A2.25 2.25 0 0 1 18 4.25v8.5A2.25 2.25 0 0 1 15.75 15h-3.105a3.501 3.501 0 0 0 1.1 1.677A.75.75 0 0 1 13.26 18H6.74a.75.75 0 0 1-.484-1.323A3.501 3.501 0 0 0 7.355 15H4.25A2.25 2.25 0 0 1 2 12.75v-8.5Zm1.5 0a.75.75 0 0 1 .75-.75h11.5a.75.75 0 0 1 .75.75v7.5a.75.75 0 0 1-.75.75H4.25a.75.75 0 0 1-.75-.75v-7.5Z"
                                          clip-rule="evenodd"></path>
                                </svg>
                                <span class="grow">System</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="relative inline-block">
                @auth
                    <button
                        x-on:click="userDropdownOpen = true"
                        x-bind:aria-expanded="userDropdownOpen"
                        type="button"
                        id="tk-dropdown-layouts-user"
                        class="inline-flex items-center justify-center space-x-2 rounded-lg border border-gray-200 bg-white px-3 py-2 text-sm font-semibold leading-5 text-gray-800 hover:border-gray-300 hover:text-gray-900 hover:shadow-sm focus:ring focus:ring-gray-300 focus:ring-opacity-25 active:border-gray-200 active:shadow-none dark:border-gray-700 dark:bg-gray-800 dark:text-gray-300 dark:hover:border-gray-600 dark:hover:text-gray-200 dark:focus:ring-gray-600 dark:focus:ring-opacity-40 dark:active:border-gray-700"
                        aria-haspopup="true"
                    >
                        <svg
                            class="hi-mini hi-user-circle inline-block size-5 sm:hidden"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-5.5-2.5a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0zM10 12a5.99 5.99 0 00-4.793 2.39A6.483 6.483 0 0010 16.5a6.483 6.483 0 004.793-2.11A5.99 5.99 0 0010 12z"
                                clip-rule="evenodd"
                            />
                        </svg>
                        <span class="hidden sm:inline">{{ auth()->user()->name }}</span>
                        <svg
                            class="hi-mini hi-chevron-down hidden size-5 opacity-40 sm:inline-block"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </button>
                    <div
                        x-cloak
                        x-show="userDropdownOpen"
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90"
                        x-on:click.outside="userDropdownOpen = false"
                        role="menu"
                        aria-labelledby="tk-dropdown-layouts-user"
                        class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-lg shadow-xl dark:shadow-gray-900"
                    >
                        <div
                            class="divide-y divide-gray-100 rounded-lg bg-white ring-1 ring-black ring-opacity-5 dark:divide-gray-700 dark:bg-gray-800 dark:ring-gray-700"
                        >
                            <div class="space-y-1 p-2.5">
                                <a
                                    role="menuitem"
                                    href="{{ route('profile') }}"
                                    wire:navigate
                                    class="group flex items-center justify-between space-x-2 rounded-lg border border-transparent px-2.5 py-2 text-sm font-medium text-gray-700 hover:bg-teal-50 hover:text-teal-800 active:border-teal-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600"
                                >
                                    <svg
                                        class="hi-mini hi-inbox inline-block size-5 flex-none opacity-25 group-hover:opacity-50"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M1 11.27c0-.246.033-.492.099-.73l1.523-5.521A2.75 2.75 0 015.273 3h9.454a2.75 2.75 0 012.651 2.019l1.523 5.52c.066.239.099.485.099.732V15a2 2 0 01-2 2H3a2 2 0 01-2-2v-3.73zm3.068-5.852A1.25 1.25 0 015.273 4.5h9.454a1.25 1.25 0 011.205.918l1.523 5.52c.006.02.01.041.015.062H14a1 1 0 00-.86.49l-.606 1.02a1 1 0 01-.86.49H8.236a1 1 0 01-.894-.553l-.448-.894A1 1 0 006 11H2.53l.015-.062 1.523-5.52z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <span class="grow">{{ __('Профіль') }}</span>
                                </a>
                            </div>
                            <div class="space-y-1 p-2.5">
                                <button
                                    type="button"
                                    role="menuitem"
                                    wire:click="logout"
                                    class="group flex w-full items-center justify-between space-x-2 rounded-lg border border-transparent px-2.5 py-2 text-left text-sm font-medium text-gray-700 hover:bg-teal-50 hover:text-teal-800 active:border-teal-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600"
                                >
                                    <svg
                                        class="hi-mini hi-lock-closed inline-block size-5 flex-none opacity-25 group-hover:opacity-50"
                                        xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20"
                                        fill="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            fill-rule="evenodd"
                                            d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z"
                                            clip-rule="evenodd"
                                        />
                                    </svg>
                                    <span class="grow">{{ __('Вийти') }}</span>
                                </button>
                            </div>
                        </div>
                    </div>
                @else
                    <x-primary-button href="{{ route('login') }}" wire:navigate>
                        {{ __('Увійти') }}
                    </x-primary-button>
                @endauth
            </div>
        </div>
    </div>
</header>
@push('scripts')
    <script>
        document.addEventListener('livewire:navigated', () => {
            let darkModePreference = localStorage.getItem("dark-mode");

            if (darkModePreference === "on") {
                document.documentElement.classList.add("dark");
            } else if (darkModePreference === "off") {
                document.documentElement.classList.remove("dark");
            } else if (darkModePreference === "system") {
                if (window.matchMedia("(prefers-color-scheme: dark)").matches) {
                    document.documentElement.classList.add("dark");
                } else {
                    document.documentElement.classList.remove("dark");
                }
            }
        })
    </script>
@endpush
