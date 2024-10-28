import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', //sccs de toda la app
                'resources/js/app.js', //js de toda la app
                'resources/css/home.css', 
                'resources/js/home.js',
                'resources/js/chatbots.js',
                'resources/sass/chatbots.scss',
            ],
            refresh: true,
        }),
    ],
});
