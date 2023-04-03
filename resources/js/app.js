import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();
import { createApp } from 'vue'

const app = createApp({})
app.component('MyDashboard', MyDashboard)
app.mount('#app')