<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('global.meta-head')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    @include('global.app.style')

    @include('global.app.head-script')

</head>
<body class="antialiased">

    <x-jet-banner />

    <main class="flex w-screen h-screen">

        <livewire:tenant.layouts.sidebar />

        <div class="lg:ml-64 flex flex-col flex-grow overflow-hidden">
            <livewire:tenant.layouts.navbar />

            {{-- @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif --}}

            <div class="bg-gray-900 opacity-50 fixed inset-0 z-40 hidden" id="sidebarBackdrop"></div>

            <div class="flex flex-col flex-grow overflow-auto dark:bg-gray-700">
            {{-- <div class="overflow-auto dark:bg-gray-700"> --}}
                {{ $slot }}
            </div>
        </div>

    </main>

    @include('global.app.body-script')

</body>
</html>
