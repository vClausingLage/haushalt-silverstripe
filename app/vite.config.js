import { defineConfig } from 'vite'

export default defineConfig({
    build: {
      // generate .vite/manifest.json in outDir
      manifest: true,
      rollupOptions: {
        // overwrite default .html entry
        input: '/input/index.js',
        output: {
            // overwrite default .js output
            chunkFileNames: './index.js',
            assetFileNames: './index.[ext]',
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
