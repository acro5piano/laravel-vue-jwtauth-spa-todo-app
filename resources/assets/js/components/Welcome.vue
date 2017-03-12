<template>
  <div>
    <p v-if="tasks.length === 0">
      please <router-link to="/login">Login.</router-link>
    </p>

    <div v-else>
      <strong>Hello, {{ $parent.user.name }}!</strong>
      <p>Your tasks here.</p>
      <ul v-for="task in tasks">
        <li>
          {{ task.title }}
          <button @click="completeTask(task.id)">Done</button>
        </li>
      </ul>

      <div class="form-group">
        <input type="text" class="form-control"
            v-model="title" @keyup.enter="addTask">
        <button class="btn btn-primary" @click='addTask'>Add task</button>
      </div>
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
        tasks: [],
        title: '',
      }
    },
    methods: {
      fetchTasks () {
        this.$http.get('tasks', res => {
          this.tasks = res.data
        })
      },
      addTask () {
        this.$http.post('tasks', {title: this.title}, res => {
          this.tasks.push(res.data)
          this.title = ''
        })
      },
      completeTask (task_id) {
        this.$http.put('tasks/' + task_id, {is_done: true}, res => {
          this.tasks.push(res.data)
          this.title = ''
        })
      },
    }
  }
</script>
