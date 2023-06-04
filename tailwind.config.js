const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
    ],

    theme: {

        extend: {
            fontFamily: {
                header: ['Oswald', ...defaultTheme.fontFamily.sans],
                body: ['Open Sans', ...defaultTheme.fontFamily.serif],
            },
            colors: {
                'nrp-blue': '#0083b3',
            },
        },
                
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')]
};
