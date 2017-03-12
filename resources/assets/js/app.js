import Vue from 'vue'
import VueRouter from 'vue-router'

import { http } from './services/http.js'
import { auth } from './services/auth.js'

require('./bootstrap')

Vue.prototype.$http = http
Vue.prototype.$auth = auth
Vue.use(VueRouter)

Vue.component('navbar', require('./components/Navbar.vue'))

const router = new VueRouter({
  mode: 'history',
  routes: [
    { path: '/', component: require('./components/Welcome.vue') },
    { path: '/login', component: require('./components/Login.vue') },
    { path: '/about', component: require('./components/About.vue') },
  ]
})

const app = new Vue({
  router,
  created () {
    http.init()

    // TODO: context として this を渡さない
    auth.getCurrentUser(this)
  },
  data () {
    return {
      user: {}
    }
  },
}).$mount('#app')
