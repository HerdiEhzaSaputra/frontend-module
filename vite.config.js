import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import { viteStaticCopy } from "vite-plugin-static-copy";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                "app/Http/Livewire/**",
                "resources/views/**",
                "Modules/**/views/**",
            ],
        }),
        viteStaticCopy({
            targets: [
                {
                    src: "resources/js/custom/*",
                    dest: "assets/custom",
                },
            ],
        }),
    ],
});
