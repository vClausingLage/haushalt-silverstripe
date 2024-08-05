import { defineConfig } from 'vite'

export default defineConfig({
    build: {

        // generate .vite/manifest.json in outDir
        manifest: true,
        // overwrite default outDir
        // outDir: 'output',
        // overwrite default assetsDir
        // assetsDir: '/assets',
        // overwrite default base
        //   base: '/base',
        // overwrite default mode
        // mode: 'production',
        base: 'htdocs',
        rollupOptions: {
            // overwrite the defaults provided by:
            // https://rollupjs.org/configuration-options/
            input: {
                a: 'htdocs/input/index.js'
            },
            output: {
                entryFileNames: '[name].js',
                // dir: 'htdocs/output',
            }
        },
    },
  })


/*
--outDir
--assetsDir
--watch
--base
--mode
*/
