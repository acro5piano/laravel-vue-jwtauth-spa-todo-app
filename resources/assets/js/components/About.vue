<template>
  <div>
    Hello, {{ userState.user.name }}.
    <br>
    This page describe who we are.
  </div>
</template>
<script>

import userStore from '../stores/user'

export default {
  created () {
  },
  data () {
    return {
      userState: userStore.state,
    }
  },
}
</script>
