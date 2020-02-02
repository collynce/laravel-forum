require('./bootstrap');

import Vue from 'vue'

Vue.component('flash', require('./components/Flash.vue').default);

window.events = new Vue();

window.flash = function (message) {
    window.events.$emit('flash', message);
};

const app = new Vue({
    el: '#app',
});
