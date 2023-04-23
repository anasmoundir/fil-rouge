const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        fontFamily: {  
            'sans': ['Figtree', 'sans-serif'],
            'serif': ['Figtree', 'serif'],
            'mono': ['Figtree', 'monospace'],
            'display': ['Figtree', 'sans-serif'],
            'body': ['Figtree', 'sans-serif'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
