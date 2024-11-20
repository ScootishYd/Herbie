import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
<<<<<<< HEAD
    build: {
        outDir: 'public/build',
    },
=======
>>>>>>> 38e03ac (Set up a fresh Laravel app)
});
