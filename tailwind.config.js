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
            objectPosition: {
                'center-left': 'center left',
            },
            gridTemplateRows: {
                '12': 'repeat(12, minmax(0, 1fr))',
            },
            gridRow: {
                'span-12': 'span 12 / span 12',
                'span-11': 'span 11 / span 11',
                'span-10': 'span 10 / span 10',
                'span-9': 'span 9 / span 9',
                'span-8': 'span 8 / span 8',
                'span-7': 'span 7 / span 7',
                'span-6': 'span 6 / span 6',
            },

            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
