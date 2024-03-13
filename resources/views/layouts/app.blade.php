<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link rel="icon" href="{{ asset('favicon.svg') }}" sizes="any" type="image/svg+xml" />
    <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png" />

    <!-- Main Stylesheet -->
    <!-- Based on your project, you might need to include the compiled CSS file if it is not automatically injected in your pages -->
    <!-- <link rel="stylesheet" href="css/<main-stylesheet>.css"> -->

    <!-- Inter web font from Bunny.net (GDPR compliant) -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link
        href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet"
    />

    <!-- Alpine.js + Focus plugin, uncomment if you would like to use Tailkit’s Alpine JS based components -->
    <!-- <script defer src="https://unpkg.com/@alpinejs/focus@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script> -->

    <!-- Alpine.js (x-cloak - https://alpinejs.dev/directives/cloak), uncomment if you will use the library -->
    <!-- <style>
      [x-cloak] {
        display: none !important;
      }
    </style> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @stack('styles')
</head>

<body>
<div
    x-data="{ themeDropdownOpen: false, userDropdownOpen: false, mobileSidebarOpen: false, desktopSidebarOpen: true, slideOverOpen: false  }"
    x-bind:class="{
    'lg:pl-64': desktopSidebarOpen
  }"
    id="page-container"
    class="mx-auto flex min-h-dvh w-full min-w-[320px] flex-col bg-gray-100 lg:pl-64 dark:bg-gray-900 dark:text-gray-100"
>
    <livewire:layout.navigation />
    <livewire:layout.header />
    <main id="page-content" class="flex max-w-full flex-auto flex-col pt-16">
        {{ $slot }}
    </main>
    <livewire:layout.footer />
</div>
@livewireScripts
@stack('scripts')
</body>
</html>
