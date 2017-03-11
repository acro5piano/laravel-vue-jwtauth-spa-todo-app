<template>
    <div>
      please <router-link to="/login">Login.</router-link>

      <div v-for="task in tasks">
        <li> {{ task.title }} </li>
      </div>
    </div>
</template>

<script>
  export default {
    created() {
      this.fetchArticles()
    },
    data() {
      return {
        tasks: []
      }
    },
    methods: {
      fetchArticles() {
        this.$http.get('/api/tasks')
          .then(res =>  {
            console.log(res)
            this.tasks = res.data
          })
      }
    }
  }
</script>
