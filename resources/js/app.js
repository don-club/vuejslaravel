import './bootstrap';
import {createApp} from 'vue';
import Users from "./components/Users.vue"

const app = createApp();

app.component('users', Users)

app.mount("#app");

