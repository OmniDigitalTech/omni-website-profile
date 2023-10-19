import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css',
                'resources/fonts',
                'resources/icons',
                'resources/images',
                'resources/js',
                'resources/json',
                'resources/libs',
                'resources/sass',
            ],
            refresh: true,
        }),
    ],
});
