import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './router.map';
import AppComponent from './components/App.vue';
import store from './store/store';

const router = new VueRouter({
    routes, store
});

new Vue({

    router,
    el: '#app',
    components: {
        'app': AppComponent
    }
});

export default router;