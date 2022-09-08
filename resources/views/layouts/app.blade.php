<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('global.meta-head')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>

    <meta name="theme-color" content="#ffffff">
    <meta name="color-scheme" content="light">

    <script>
        const alwaysLightMode = false;

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
            if (localStorage.theme === 'system') {
                if (e.matches) {
                    document.documentElement.classList.add('dark');
                } else {
                    document.documentElement.classList.remove('dark');
                }
            }

            updateThemeAndSchemeColor();
        });

        function updateTheme() {
            if (!('theme' in localStorage)) {
                localStorage.theme = 'system';
            }

            switch (localStorage.theme) {
                case 'system':
                    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
                        document.documentElement.classList.add('dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                    }
                    document.documentElement.setAttribute('color-theme', 'system');
                    break;

                case 'dark':
                    document.documentElement.classList.add('dark');
                    document.documentElement.setAttribute('color-theme', 'dark');
                    break;

                case 'light':
                    document.documentElement.classList.remove('dark');
                    document.documentElement.setAttribute('color-theme', 'light');
                    break;
            }

            updateThemeAndSchemeColor();
        }

        function updateThemeAndSchemeColor() {
            if (! alwaysLightMode) {
                if (document.documentElement.classList.contains('dark')) {
                    document.querySelector('meta[name="color-scheme"]').setAttribute('content', 'dark');
                    document.querySelector('meta[name="theme-color"]').setAttribute('content', '#171923');

                    return;
                }

                document.querySelector('meta[name="color-scheme"]').setAttribute('content', 'light');
                document.querySelector('meta[name="theme-color"]').setAttribute('content', '#ffff');
            }
        }

        updateTheme();

        (window.toDarkMode = () => {
        (localStorage.theme = "dark"), window.updateTheme();
        }),
        (window.toLightMode = () => {
            (localStorage.theme = "light"), window.updateTheme();
        }),
        (window.toSystemMode = () => {
            (localStorage.theme = "system"), window.updateTheme();
        });
    </script>



    @livewireStyles
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

    @stack('modals')

    @livewireScripts

    <script>
        const sidebar = document.getElementById('menu');

        const toggleSidebarMobile = (sidebar, sidebarBackdrop) => {
            sidebar.classList.toggle('hidden');
            sidebarBackdrop.classList.toggle('hidden');
        }

        const toggleSidebarMobileEl = document.getElementById('toggleSidebarMobile');
        const sidebarBackdrop = document.getElementById('sidebarBackdrop');
        const toggleSidebarMobileSearch = document.getElementById('toggleSidebarMobileSearch');

        toggleSidebarMobileSearch.addEventListener('click', () => {
            toggleSidebarMobile(sidebar, sidebarBackdrop);
            document.getElementById("mobile-search").focus();
        });

        toggleSidebarMobileEl.addEventListener('click', () => {
            toggleSidebarMobile(sidebar, sidebarBackdrop);
        });

        sidebarBackdrop.addEventListener('click', () => {
            toggleSidebarMobile(sidebar, sidebarBackdrop);
        });
    </script>

    <script>
        // just for fcking toogle button
        const darkIcon = document.querySelector('#darkIcon');
        const lightIcon = document.querySelector('#lightIcon');
        const systemIcon = document.querySelector('#systemIcon');

        darkIcon.addEventListener("click", function () {
            lightIcon.classList.remove("hidden");
            darkIcon.classList.toggle("hidden");
        });
        lightIcon.addEventListener("click", function () {
            systemIcon.classList.remove("hidden");
            lightIcon.classList.toggle("hidden");
        });
        systemIcon.addEventListener("click", function () {
            darkIcon.classList.remove("hidden");
            systemIcon.classList.toggle("hidden");
        });

        if (document.documentElement.getAttribute('color-theme') === 'system') {
            systemIcon.classList.remove('hidden');
        } else {
            if (document.documentElement.getAttribute('color-theme') === 'dark') {
                darkIcon.classList.remove('hidden');
            } else {
                lightIcon.classList.remove('hidden');
            }
        }
        // this is the end of fcking toogle button


    </script>


</body>
</html>
