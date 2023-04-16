import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
import { createApp } from 'vue/dist/vue.esm-bundler';
import VideoUpload from './components/VideoUpload.vue';

// Create a fresh Vue Application instance
const app = createApp({ 
      components: {
            VideoUpload
      },
});

app.mount('#app');



