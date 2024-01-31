import './bootstrap';
import App from "./components/App.vue";
import { createApp } from 'vue';
import router from './router/route';

const app = createApp(App)
app.use(router).mount('#app')
