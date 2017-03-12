<template>
  <div>
    <p v-if="tasks.length === 0">
      please <router-link to="/login">Login.</router-link>
    </p>

    <div v-else>
      <strong>Hello, {{ $parent.user.name }}!</strong>
      <p>Your tasks here.</p>
      <ul v-for="task in tasks">
        <li> {{ task.title }} </li>
      </ul>
    </div>
  </div>
</template>

<script>
  export default {
    created() {
      this.fetchTasks()
    },
    data() {
      return {
        tasks: []
      }
    },
    methods: {
      fetchTasks () {
        this.$http.get('tasks', res => {
          this.tasks = res.data
        })
      },
    }
  }
</script>
