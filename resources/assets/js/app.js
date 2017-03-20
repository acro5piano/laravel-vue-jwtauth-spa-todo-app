import Vue from 'vue'

import http from './services/http.js'
import userStore from './stores/userStore'
import router from './router'
import event from './utils/event'

require('bootstrap-sass')

const app = new Vue({
  router,
  created () {
    http.init()
    userStore.init()
    event.init(new Vue)
  },
  render: h => h(require('./app.vue')),
}).$mount('#app')
