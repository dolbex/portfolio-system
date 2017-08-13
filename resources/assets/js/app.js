require('./bootstrap');

window.Vue = require('vue');

import store from './vuex/store'
import inView from 'in-view'

const app = new Vue({
  el: '#app',
  store: store,
  mounted: function () {
    this.setParallaxWatchers()
  },
  methods: {
    setParallaxWatchers () {
      new inView('.in-view')
        .on('enter', function (el) {
          el.classList.add(('is-visible'))
        })

      inView.threshold(0.5)
    }
  }
});
