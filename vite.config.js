import { defineConfig } from 'vite';
import { resolve } from 'path';

export default defineConfig({
  root: '.',          
  assetsInclude: ['**/*.php'], 
  build: {
    outDir: 'dist',
    emptyOutDir: true,
    manifest: true,     
    rollupOptions: {
      // ponto de entrada agora é só o JS
      input: {
        main: resolve(__dirname, 'assets/js/main.js'),
      },
    },
    
  },
});