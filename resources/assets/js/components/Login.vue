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
                        <input id="email" type="email" class="form-control" name="email" required autofocus>
                      </div>
                    </div>

                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="form-group">
                      <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required autofocus>
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
                        <button type="submit" class="btn btn-primary">
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

