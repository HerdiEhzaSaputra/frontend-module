<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('global.meta-head')

    <link rel="stylesheet" href="{{ asset('frontend/animate.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="{{ asset('frontend/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>

    <style>
        .bg-sm {
            background-image: url('{{ asset('images/background.svg') }}');
            background-size: cover;
        }
    </style>

    @livewireStyles

</head>

<body {{ request()->is('terms-of-service', 'privacy-policy') ? 'class=bg-sm' : '' }}>

    <livewire:central.layouts.navbar />

    <main class="font-sans text-gray-900 antialiased">
        {{ $slot }}
    </main>

    <livewire:central.layouts.footer />

    @stack('modals')

    @livewireScripts

    <script src="{{ asset('frontend/main.js') }}"></script>

    <script>
        // ==== for menu scroll
        const pageLink = document.querySelectorAll(".ud-menu-scroll");

        pageLink.forEach((elem) => {
            elem.addEventListener("click", (e) => {
                e.preventDefault();
                document.querySelector(elem.getAttribute("href")).scrollIntoView({
                    behavior: "smooth",
                    offsetTop: 1 - 60,
                });
            });
        });

        // section menu active
        function onScroll(event) {
            const sections = document.querySelectorAll(".ud-menu-scroll");
            const scrollPos =
                window.pageYOffset ||
                document.documentElement.scrollTop ||
                document.body.scrollTop;

            for (let i = 0; i < sections.length; i++) {
                const currLink = sections[i];
                const val = currLink.getAttribute("href");
                const refElement = document.querySelector(val);
                const scrollTopMinus = scrollPos + 73;
                if (
                    refElement.offsetTop <= scrollTopMinus &&
                    refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
                ) {
                    document
                        .querySelector(".ud-menu-scroll")
                        .classList.remove("active");
                    currLink.classList.add("active");
                } else {
                    currLink.classList.remove("active");
                }
            }
        }

        window.document.addEventListener("scroll", onScroll);
    </script>

</body>

</html>
