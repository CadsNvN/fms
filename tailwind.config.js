import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            backgroundImage: {
                'hero-image': "url('/public/images/Torres_Escaro1.jpg')",
                'urn': "url('/icons/urn.png')",
            }
        },
        fontFamily: {
            'serif': ['ui-serif', 'Georgia'],

        }
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
};
