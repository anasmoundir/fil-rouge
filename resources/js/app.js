import './bootstrap';
import Alpine from 'alpinejs';
import axios from 'axios';
window.Alpine = Alpine;


Alpine.start();
import 'slick-carousel/slick/slick';
import $ from 'jquery';
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



