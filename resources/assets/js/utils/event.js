export default {
  bus: null,

  init (instance) {
    if (!this.bus) {
      this.bus = instance
    }

    return this
  },

  emit (name) {
    this.bus.$emit(name)
    return this
  },

  on (event, callback) {
    this.bus.$on(event, callback)
    return this
  }
}
