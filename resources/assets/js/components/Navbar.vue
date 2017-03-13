<template>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed"
                 data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                 aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <router-link to="/" class="navbar-brand">Vue TODO</router-link>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><router-link  to="/about">About</router-link></li>

          <li class="dropdown" v-if="$parent.authenticated">
            <a href="#" class="dropdown-toggle"
               data-toggle="dropdown"
               role="button" aria-haspopup="true" aria-expanded="false">
               {{ $parent.user.name }}
               <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a @click="logout">Log out</a></li>
            </ul>
          </li>
          <li v-else>
            <router-link to="/login">Log in</router-link>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</template>

<script>
  import auth from '../services/auth'

  export default {
    methods: {
      logout() {
        auth.logout()
      }
    }
  }
</script>
