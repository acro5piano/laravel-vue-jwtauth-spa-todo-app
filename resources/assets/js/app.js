import Vue from 'vue'
import VueRouter from 'vue-router'

import http from './services/http.js'
import userStore from './stores/user'
import router from './router'

require('bootstrap-sass')

Vue.use(VueRouter)

Vue.component('navbar', require('./components/Navbar.vue'))

const app = new Vue({
  router,
  created () {
    http.init()
    userStore.init(router)
  },
}).$mount('#app')
