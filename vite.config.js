import { defineConfig } from 'vite'
import path from 'path';

export default defineConfig({
  build: {
    manifest: true,
    rollupOptions: {
      input: {
        'themes/indexing': 'htdocs/app/client/src/javascript/test.js',
        'themes/react/main': 'htdocs/app/client/src/themes/react/main.js',
      },
      output: {
        entryFileNames: ({ name }) => {
          // Map the name to the desired output directory
          const outputPaths = {
            'themes/indexing': 'htdocs/themes/indexing',
            'themes/react/main': 'htdocs/themes/react/main',
          };

          const outputPath = outputPaths[name];
          return path.join(outputPath, '[name].js');
        },
        // This setting should be left as it is or adjusted as per your directory structure
        // Setting `dir` to 'htdocs' will ensure all outputs are under this directory
        dir: 'htdocs',
      },
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
