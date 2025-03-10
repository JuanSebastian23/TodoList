import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
            // Asegurarse de que los activos se compilen en el directorio public/build
            buildDirectory: 'build',
        }),
        tailwindcss(),
    ],
    build: {
        // Asegurarse de que el outDir sea compatible con Vercel
        outDir: 'public/build',
    },
});
