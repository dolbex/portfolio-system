require('./bootstrap');

window.Vue = require('vue');

import MultipleImageSelect from './components/MultipleImageSelect'

const app = new Vue({
  el: '#admin-app',
  components: {
    'image-select': MultipleImageSelect
  }
});
