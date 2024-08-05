import { defineConfig } from 'vite'
import path from 'path';

export default defineConfig({
  build: {
    manifest: true,
    emptyOutDir: false, // prevent clearing htdox folder
    outDir: 'htdocs',
    rollupOptions: {
      input: {
        'admin': 'htdocs/app/client/src/javascript/admin/admin.js',
        'default': 'htdocs/app/client/src/javascript/themes/default/main.js',
        'react': 'htdocs/app/client/src/javascript/themes/react/main.jsx',
      },
      output: {
        entryFileNames: ({ name }) => {
          // Map the name to the desired output directory
          const outputPaths = {
            'admin': 'app/client/dist/javascript/',
            'default': 'themes/default/javascript/',
            'react': 'themes/react/javascript/',
          };

          const outputPath = outputPaths[name];
          return path.join(outputPath, '[name].js');
        },
        // dir: 'htdocs'
        // This setting should be left as it is or adjusted as per your directory structure
        // Setting `dir` to 'htdocs' will ensure all outputs are under this directory
        // dir: 'htdocs',
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
