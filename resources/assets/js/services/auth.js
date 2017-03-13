import http from './http'

export default {
  login (email, password) {
    var login_param = {email: email, password: password}
    http.post('authenticate', login_param, res => {
      const token = res.data.token
      if (token) {
        localStorage.setItem('jwt-token', token)
      }
      this.context.user = res.data.user
      this.context.authenticated = true
      this.context.$router.push('/')
    })
  },

  // To log out, we just need to remove the token
  logout() {
    http.get('logout', () => {
      localStorage.removeItem('id_token')
      this.context.authenticated = false
      this.context.$forceUpdate()
      this.context.$router.push('/login')
    })
  },

  getCurrentUser () {
    http.get('me', res => {
      this.context.user = res.data.user
      this.context.authenticated = true
    })
  },

  /**
   * Init the service.
   */
  init (context) {
    this.context = context
    this.getCurrentUser()
  }
}
