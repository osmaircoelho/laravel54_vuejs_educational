require('./bootstrap');

window.Vue = require('vue');


Vue.component('example', require('./components/Example.vue'));
Vue.component('class-student', require('./components/class_information/ClassStudent') );

const admin = new Vue({
    el: '#app'
});
