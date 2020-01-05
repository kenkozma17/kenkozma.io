let Vue = require('vue');

Vue.component('navigation', require('./components/Navigation.vue').default);
Vue.component('frontpage', require('./components/Frontpage.vue').default);
Vue.component('contact-form', require('./components/Contact.vue').default);
Vue.component('about', require('./components/About.vue').default);
Vue.component('work', require('./components/Work.vue').default);

new Vue({
    el: '#app',
    data: {},
});