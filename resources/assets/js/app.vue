<template>
  <div id="app">
      <navbar></navbar>
      <clip-loader v-if="loading" :size="size" class="loader"></clip-loader>
      <div class="container">
        <router-view></router-view>
      </div>
      <hr>
      <div class="container-fluid">
          <a href="https://github.com/acro5piano/laravel-vue-jwtauth-spa-todo-app" target="_blank">
              <img src="https://image.flaticon.com/icons/svg/25/25231.svg" width="30" height="20">
          </a>
      </div>
  </div>
</template>

<script>
  import ClipLoader from 'vue-spinner/src/ClipLoader.vue'
  import event from './utils/event'

  export default {
    created () {
      event.on('spinner:start', () => this.loading = true)
      event.on('spinner:stop',  () => this.loading = false)
    },
    components: {
      ClipLoader
    },
    data () {
      return {
        loading: false,
        size: '15px',
      }
    },
  }

</script>

<style>
  .loader {
    position:absolute;
    left:10px;
    top:55px;
  }
</style>
