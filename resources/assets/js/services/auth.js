// TODO: context 変数を毎回渡さないようにする。 Store?

export const auth = {
  // To log out, we just need to remove the token
  logout(context) {
    localStorage.removeItem('id_token')
    context.user.authenticated = false
  },
  getCurrentUser (context) {
    console.log(context.user)

    context.$http.get('me', res => {
      context.user = res.data.user
    })
  }
}
