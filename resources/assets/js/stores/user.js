import http from '../services/http'

export default {
  debug: true,
  state: {
    user: {},
    authenticated: false,
  },

  login (email, password) {
    var login_param = {email: email, password: password}
    http.post('authenticate', login_param, res => {
      const token = res.data.token
      if (token) {
        localStorage.setItem('jwt-token', token)
      }
      this.state.user = res.data.user
      this.state.authenticated = true
      this.router.push('/')
    })
  },

  // To log out, we just need to remove the token
  logout () {
    http.get('logout', () => {
      localStorage.removeItem('id_token')
      this.state.authenticated = false
      this.router.push('/login')
    })
  },

  setCurrentUser () {
    http.get('me', res => {
      this.state.user = res.data.user
      this.state.authenticated = true
    })
  },

  /**
   * Init the service.
   */
  init (router) {
    this.router = router
    this.setCurrentUser()
  }
}
