import './bootstrap';
import {createApp} from 'vue';
import Home from "./components/Home.vue"
import Create from "./components/Create.vue"
import Update from "./components/Update.vue"
import Read from './components/Read.vue'
import Error from './components/404.vue'

const app = createApp();

app.component('home', Home)
app.component('create', Create)
app.component('update', Update)
app.component('read', Read)
app.component('error', Error)


app.mount("#app");


