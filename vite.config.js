import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            // input: ['resources/css/app.css', 'resources/js/app.js','resources/sass/app.scss', 'resources/sass/custom.scss', 'resources/js/quill-editor.js'],
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/sass/app.scss', 
                'resources/js/quill-editor.js'
            ],
            refresh: true,
        }),
    ],
});
