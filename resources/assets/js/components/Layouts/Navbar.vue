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

          <li class="dropdown">
            <a href="#" class="dropdown-toggle"
               data-toggle="dropdown"
               role="button" aria-haspopup="true" aria-expanded="false">
               {{ user.name }}
               <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><router-link  to="/logout">Log out</router-link></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</template>

<script>
  export default {
    created() {
      this.getUser()
    },
    data() {
      return {
        user: ''
      }
    },
    methods: {
      getUser() {
        this.$http.get('/api/me')
        .then(res =>  {
          this.user = res.data.user
        })
      }
    }
  }
</script>
