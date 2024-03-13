<div>
    @foreach($operators as $operator)
    <div class="px-3 pb-2 pt-5 text-xs font-semibold uppercase tracking-wider text-gray-500">
        {{ $operator['name'] }}
    </div>
    <a href="{{ route('companies', ['operator_id' => $operator['id']]) }}" wire:navigate class="group flex items-center space-x-2 rounded-lg border border-transparent px-2.5 text-sm font-medium text-gray-800 hover:bg-teal-50 hover:text-gray-900 active:border-teal-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600">
        <span class="flex flex-none items-center text-gray-400 group-hover:text-teal-500 dark:text-gray-500 dark:group-hover:text-gray-300">
            <svg
                class="hi-outline hi-briefcase inline-block size-5"
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
                    d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 00.75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 00-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0112 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 01-.673-.38m0 0A2.18 2.18 0 013 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 013.413-.387m7.5 0V5.25A2.25 2.25 0 0013.5 3h-3a2.25 2.25 0 00-2.25 2.25v.894m7.5 0a48.667 48.667 0 00-7.5 0M12 12.75h.008v.008H12v-.008z"
                />
            </svg>
        </span>
        <span class="grow py-2">Юр. та фіз. особи</span>
        <livewire:navigation-counts :operator-i-d="$operator['id']" :table='1' />
    </a>
    <a href="javascript:void(0)" class="group flex items-center space-x-2 rounded-lg border border-transparent px-2.5 text-sm font-medium text-gray-800 hover:bg-teal-50 hover:text-gray-900 active:border-teal-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600">
        <span
            class="flex flex-none items-center text-gray-400 group-hover:text-teal-500 dark:text-gray-500 dark:group-hover:text-gray-300"
        >
            <svg
                class="hi-outline hi-clipboard-document-list inline-block size-5"
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
                    d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z"
                />
            </svg>
        </span>
        <span class="grow py-2">Тарифи</span>
        <livewire:navigation-counts :operator-i-d="$operator['id']" :table='2' />
    </a>
    <a href="javascript:void(0)" class="group flex items-center space-x-2 rounded-lg border border-transparent px-2.5 text-sm font-medium text-gray-800 hover:bg-teal-50 hover:text-gray-900 active:border-teal-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600">
        <span
            class="flex flex-none items-center text-gray-400 group-hover:text-teal-500 dark:text-gray-500 dark:group-hover:text-gray-300"
        >
            <svg
                class="hi-outline hi-users inline-block size-5"
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
                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z"
                />
            </svg>
        </span>
        <span class="grow py-2">Рахунки</span>
        <livewire:navigation-counts :operator-i-d="$operator['id']" :table='3' />
    </a>
    <a href="javascript:void(0)" class="group flex items-center space-x-2 rounded-lg border border-transparent px-2.5 text-sm font-medium text-gray-800 hover:bg-teal-50 hover:text-gray-900 active:border-teal-100 dark:text-gray-200 dark:hover:bg-gray-700/75 dark:hover:text-white dark:active:border-gray-600">
        <span
            class="flex flex-none items-center text-gray-400 group-hover:text-teal-500 dark:text-gray-500 dark:group-hover:text-gray-300"
        >
            <svg
                class="hi-outline hi-plus inline-block size-5"
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
                    d="M12 4.5v15m7.5-7.5h-15"
                />
            </svg>
        </span>
        <span class="grow py-2">Всі номери</span>
        <livewire:navigation-counts :operator-i-d="$operator['id']" :table='4' />
    </a>
    @endforeach
</div>
