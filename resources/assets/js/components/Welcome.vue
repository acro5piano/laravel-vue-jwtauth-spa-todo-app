<template>
    <div>
      please <router-link to="/login">Login.</router-link>

      <div v-for="article in articles">
        <h1>
            <router-link :to="'/articles/' + article.id">{{ article.title }}</router-link>
        </h1>
        <p>
            {{ article.content }}
        </p>
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
        articles: [{title: 'About vue.js', id: 1, content: 'lorem ipsam'}]
      }
    },
    methods: {
      fetchArticles() {
        this.$http.get('/api/index')
          .then(res =>  {
            console.log(res)
            this.articles = res.data
          })
      }
    }
  }
</script>
