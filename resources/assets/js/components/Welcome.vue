<template>
  <div>
    <p v-if="$parent.user.name == undefined">
      please <router-link to="/login">Login.</router-link>
    </p>

    <div v-else>
      <strong>Hello, {{ $parent.user.name }}!</strong>
      <p>Your tasks here.</p>
      <ul v-for="task in tasks">
        <li v-if="task.is_done">
          <strike> {{ task.title }} </strike>
        </li>
        <li v-else>
          {{ task.title }}
        </li>
        <button @click="completeTask(task)" class="btn btn-sm btn-success">Done</button>
        <button @click="removeTask(task)" class="btn btn-sm btn-danger">Remove</button>
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
          this.tasks[res.data.id] = res.data
          this.title = ''
        })
      },
      completeTask (task) {
        this.$http.put('tasks/' + task.id, {is_done: !task.is_done}, res => {
          this.tasks[task.id] = res.data
          this.$forceUpdate()
        })
      },
      removeTask (task) {
        this.$http.delete('tasks/' + task.id, {}, () => {
          delete this.tasks[task.id]
          this.$forceUpdate()
        })
      },
    }
  }
</script>
