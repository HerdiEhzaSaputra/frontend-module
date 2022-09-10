@stack('modals')

@yield('third_party_scripts')

@stack('page_scripts')

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