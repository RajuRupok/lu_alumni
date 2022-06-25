import DepositApp from './PostApp.vue';
import VueRouter from 'vue-router';
import save from './components/save.vue';
window.axios = require('axios');

export default new VueRouter({
    routes: [
        {
            path: '/',
            name: 'deposit',
            component: PostApp,
        }
    ]
});