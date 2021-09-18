

require('./bootstrap');

window.Vue = require('vue').default;

import VueRouter from 'vue-router'
import routes from './router/routes'

Vue.use(VueRouter)



const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)
});
