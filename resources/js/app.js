require('./bootstrap');

import Vue from 'vue'

window.axios = require('axios');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': window.App.csrfToken,
    'X-Requested-With': 'XMLHttpRequest'
};

Vue.component('flash', require('./components/Flash.vue').default);
Vue.component('thread-view', require('./components/pages/Thread.vue').default);
Vue.component('replies', require('./components/Replies').default);
Vue.component('paginator', require('./components/Paginator.vue').default);
Vue.component('subscribe-button', require('./components/SubscribeButton').default);
Vue.component('user-notifications', require('./components/UserNotifications').default);

Vue.prototype.authorize = function (handler) {
    let user = window.App.user;

    return user ? handler(user) : false;
};

window.events = new Vue();

window.flash = function (message, level = 'success') {
    window.events.$emit('flash', { message, level });
};

const app = new Vue({
    el: '#app',
});
