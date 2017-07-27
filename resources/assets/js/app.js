require('./bootstrap');

window.Vue = require('vue');

import store from './vuex/store'

Vue.component('example', require('./components/Example.vue'));
Vue.component('example-two', require('./components/Example2.vue'));
Vue.component('example-three', require('./components/Example3.vue'));
Vue.component('ive-got-a-need', require('./components/Need.vue'));
Vue.component('a-need-for-speed', require('./components/Speed.vue'));

const app = new Vue({
  el: '#app',
  store: store
});
