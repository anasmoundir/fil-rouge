import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import {resolve} from 'path';
import WindiCSS from 'vite-plugin-windicss';
import vue from '@vitejs/plugin-vue';
export default defineConfig({
    plugins: [
      laravel({
        input: [
          'resources/css/app.css',
          'resources/js/app.js'
        ],
        refresh: true
      }),
      vue(),
      WindiCSS(),
    ],
    css: {
      postcss: {
        plugins: [
          require('tailwindcss'),
        ],
      },
    },
    resolve: {
      alias: {
        '@': resolve(__dirname, 'resources/js')
      },
    },
  });