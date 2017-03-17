import Vue from 'vue'

import http from './services/http.js'
import userStore from './stores/user'
import router from './router'
import event from './utils/event'

require('bootstrap-sass')

Vue.component('navbar', require('./components/Navbar.vue'))

const app = new Vue({
  router,
  created () {
    http.init()
    userStore.init()
    event.init(new Vue)
  },
  render: h => h(require('./app.vue')),
}).$mount('#app')
