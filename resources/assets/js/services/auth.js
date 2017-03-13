// TODO: context 変数を毎回渡さないようにする。 Store?

export const auth = {

  // To log out, we just need to remove the token
  logout() {
    localStorage.removeItem('id_token')
    this.context.user.authenticated = false
  },
  getCurrentUser () {
    this.context.$http.get('me', res => {
      this.context.user = res.data.user
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
