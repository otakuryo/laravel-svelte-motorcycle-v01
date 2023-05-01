import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { svelte } from '@sveltejs/vite-plugin-svelte';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel.default({
            input: [
                'resources/js/appSvelte.js',
                'resources/scss/app.scss',
            ],
            refresh: true,
        }),
        svelte({})
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap')
        }
    }
});