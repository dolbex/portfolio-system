require('./bootstrap');

window.Vue = require('vue');

import store from './vuex/store'

Vue.component('editor', require('./components/WysiwygEditor.vue'));

const app = new Vue({
  el: '#app'
});
