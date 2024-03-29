import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/sass/app.css',
            'resources/js/app.js', // Update the entry module here
        ]),
    ],
});
