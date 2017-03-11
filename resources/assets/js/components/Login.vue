<template>
  <div>
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

              <div class="form-group">
                <div class="col-md-6">
                  <input id="email" type="email" class="form-control" v-model="email" required autofocus>
                </div>
              </div>

              <label for="password" class="col-md-4 control-label">Password</label>
              <div class="form-group">
                <div class="col-md-6">
                  <input id="password" type="password" class="form-control" v-model="password" required autofocus>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                  <div class="checkbox">
                    <label>
                      <input type="checkbox" name="remember"> Remember Me
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group">
                <div class="col-md-8 col-md-offset-4">
                  <button @click="login" type="submit" class="btn btn-primary">
                    Login
                  </button>

                  <a class="btn btn-link" href="#">
                    Forgot Your Password?
                  </a>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
  import localStore from 'local-storage'

  export default {
    data() {
      return {
        email: 'test@example.com',
        password: 'password'
      }
    },
    methods: {
      login() {
        var login_param = {email: this.email, password: this.password}
        this.$http.post('authenticate', login_param)
        this.$router.push('/')
      }
    }
  }
</script>

