import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
import { createApp } from 'vue';
import VideoUpload from './components/VideoUpload.vue';

const app = createApp({
      data() {
        return {
          message: 'Hello from Vue!'
        }
      }
    });
      
    app.component('video-upload', VideoUpload);
    
    app.mount('#app');



