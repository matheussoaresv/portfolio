import { defineConfig } from 'vite';
import purgecss from 'vite-plugin-purgecss';

export default defineConfig({
  root: 'src',
  plugins: [
    purgecss({
      content: [
        './src/**/*.html',
        './public/**/*.php',
        './src/**/*.js',
        './php/**/*.php',
        './index.php'
      ],
      safelist: [/^show$/, /^fade$/, /^collapse$/, /^modal/, /^animate__/,], // Mantém classes necessárias do Bootstrap
    }),
  ],
  build: {
    outDir: '../public/assets',
    emptyOutDir: true,
    rollupOptions: {
      input: {
        main: './src/js/main.js',
        style: './src/css/style.css',
      },
      output: {
        entryFileNames: '[name].js',
        assetFileNames: '[name][extname]',
      },
    },
  },
});
