let Vue = require('vue');

Vue.component('navigation', require('./components/Navigation.vue').default);

new Vue({
    el: '#app',
    data: {}
});