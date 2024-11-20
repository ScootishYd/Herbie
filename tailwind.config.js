import defaultTheme from 'tailwindcss/defaultTheme';
<<<<<<< HEAD
import forms from '@tailwindcss/forms';
=======
>>>>>>> 38e03ac (Set up a fresh Laravel app)

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
<<<<<<< HEAD
        './resources/views/**/*.blade.php',
    ],

=======
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
>>>>>>> 38e03ac (Set up a fresh Laravel app)
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
<<<<<<< HEAD
        backgroundImage: {
            'custom-svg': "url('/images/bg-img.svg')", // Tambahkan ini
        },
    },

    plugins: [forms],
=======
    },
    plugins: [],
>>>>>>> 38e03ac (Set up a fresh Laravel app)
};
