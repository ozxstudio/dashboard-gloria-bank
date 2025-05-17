import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';
server: {
    host: '127.0.0.1',
    port: 5173,
    strictPort: true
  }
export default defineConfig({
  plugins: [
    laravel({
      input: [
        'resources/js/app.jsx',  // ini penting!
        'resources/css/app.css',
      ],
      refresh: true,
    }),
    react(),
  ],
});

