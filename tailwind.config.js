const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js"
    ],

    darkMode: 'class',

    theme: {
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: "#212b36",
            },
            container: {
                center: true,
                padding: "16px",
            },

            animation: {
                "modal": "modal 0.3s cubic-bezier(0.250, 0.460, 0.450, 0.940) both",
            },
            keyframes: {
                "modal": {
                    "0%": {
                        transform: "scale(0)",
                        "transform-origin": "50% 100%",
                        opacity: "1"
                    },
                    to: {
                        transform: "scale(1)",
                        "transform-origin": "50% 100%",
                        opacity: "1"
                    }
                },
            }
        },
    },

    plugins: [
        require("@tailwindcss/forms"),
        require("@tailwindcss/typography"),
        require('flowbite/plugin'),
    ],
};
