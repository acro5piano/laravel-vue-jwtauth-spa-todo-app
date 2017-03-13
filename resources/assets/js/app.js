import Vue from 'vue'
import VueRouter from 'vue-router'

import http from './services/http.js'
import auth from './services/auth.js'
import router from './router'

require('./bootstrap')
Vue.use(VueRouter)

Vue.component('navbar', require('./components/Navbar.vue'))

const app = new Vue({
  router,
  created () {
    http.init()
    auth.init(this)
  },
  data () {
    return {
      user: {},
      authenticated: false,
    }
  },
}).$mount('#app')
