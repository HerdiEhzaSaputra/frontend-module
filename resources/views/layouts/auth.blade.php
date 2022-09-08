<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('global.meta-head')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .bg-sm {
            background-image: url('{{ asset('images/background.svg') }}');
            background-size: cover;
        }
    </style>

    @livewireStyles

</head>

<body class="{{ request()->is('terms-of-service', 'privacy-policy') ? 'bg-sm' : '' }}">

    <div class="font-sans text-gray-900 antialiased lg:overflow-hidden">
        {{ $slot }}
    </div>

    @stack('modals')

    @livewireScripts

</body>

</html>
