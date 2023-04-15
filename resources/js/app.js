import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
import { createApp } from 'vue';
import VideoUpload from './components/VideoUpload.vue';

Vue.component('videoUpload', require('./components/VideoUpload.vue').default);

export default ({
      components: {
            VideoUpload
      },
});
