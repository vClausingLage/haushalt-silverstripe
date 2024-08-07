import { defineConfig } from 'vite'
import tailwindcss from 'tailwindcss'

export default defineConfig({
    css: {
        postcss: {
            plugins: [tailwindcss()],
        },
    },
    build: {
        manifest: true,
        sourcemap: true,
        watch: true,
        emptyOutDir: true, // prevent clearing htdox folder
        // outDir: 'dist', // outDir default value is dist
        assetsDir: '',
        rollupOptions: {
            input: {
                    'js': 'src/javascript/index.js',
                    'css': 'src/css/main.css'
            },
            output: {
                entryFileNames: ({ name}) => {
                    if (name === 'js') {
                        return 'javascript/index.js'
                    }
                    // RETURN LOST IF NOT IN THE LIST
                    return 'lost/[name].js'
                },
                assetFileNames: asset => {
                    if (asset.name === 'css.css') {
                        return 'css/main.css'
                    }
                    // RETURN LOST IF NOT IN THE LIST
                    return 'lost/[name].[ext]'
                }
            }
        },
    },
})
