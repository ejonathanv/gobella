import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['mundial', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'light': '#FEF6ED',
                'dark': '#3C3C3C',
                'primary': '#EB6554',
                'secondary': '#F5B067',
                'highlight': '#F8D779',
                'highlight-100': '#fbdf90',
                'highlight-900': '#6D5824'
            }
        },
    },

    plugins: [forms],
};
