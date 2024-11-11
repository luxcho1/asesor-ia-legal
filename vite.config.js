import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', //sccs de toda la app
                'resources/css/app.css', //sccs de toda la app
                'resources/js/app.js', //js de toda la app

                'resources/css/home.css', 
                'resources/js/home.js',

                'resources/js/chatbot.js',
                'resources/css/chatbot.css',

                'resources/css/auth.css',
                'resources/css/chats.css',
                'resources/css/nav-content.css',
                'resources/js/recomendacion-abogado.js',
                'resources/css/auth.css',
            ],
            refresh: true,
        }),
    ],
});
