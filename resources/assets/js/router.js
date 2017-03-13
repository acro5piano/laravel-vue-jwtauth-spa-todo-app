import VueRouter from 'vue-router'
import Vue from 'vue'

export default new VueRouter({
  mode: 'history',
  routes: [
    { path: '/', component: require('./components/Welcome.vue') },
    { path: '/login', component: require('./components/Login.vue') },
    { path: '/about', component: require('./components/About.vue') },
  ]
})

