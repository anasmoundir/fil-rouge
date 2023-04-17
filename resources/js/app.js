import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
import { createApp } from 'vue';
import VideoUpload from './components/VideoUpload.vue';

const app = createApp({});
app.component('video-upload', VideoUpload);
app.mount('#app');



