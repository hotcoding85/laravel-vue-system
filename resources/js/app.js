/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('like-component', require('./components/LikeComponent.vue').default);
Vue.component('dislike-component', require('./components/DislikeComponent.vue').default);

const app = new Vue({
    el: '#app',
});
