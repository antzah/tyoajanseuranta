require('./bootstrap');

window.Vue = require('vue');
window.moment = require('moment');
moment.locale("fi");

Vue.component('kalenteri-component', require('./components/Kalenteri.vue'));

const app = new Vue({
    el: '#app'
});