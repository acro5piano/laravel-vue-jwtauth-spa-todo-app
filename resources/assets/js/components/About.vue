<template>
  <div>
    This page describe who we are.
    <div v-html='content'></div>
  </div>
</template>
<script>

import marked from 'marked'

export default {
  created () {
    this.content = marked(this.markdown)
  },
  data () {
    return {
      content: '',
      markdown: `

# laravel-vue-jwtauth-spa-todo-app
SPA Todo application with authentication using Lavavel 5.4 + Vue.js 2.2 + JWTAuth

# Why SPA?

SPA (Single Page Application) make user experience much better.

# Why Laravel?

Laravel is designed to use modern frontend development.

Laravel contains the following stacks by defualt:

- Webpack
- Vue.js

And laravel-mix build all asset files.

# Why Vue.js?

Vue.js is one of modern JavaScript framework.
It can be installed partialy, but its ecosystem enables us to make simple, lightweight, elegant SPA.

- vue-router
- axios

Bigger appliction may need state management system such as \`vuex\`.


# Why todo app?

Login-enable Todo app requires the basic of web technology.  It includes

- RESTful routing
- State Management (legacy session or JWTAuth, OAuth2, etc.)
- Database Migration

# Install

\`\`\`
git clone git@github.com:acro5piano/laravel-vue-jwtauth-spa-todo-app.git
cd laravel-vue-jwtauth-spa-todo-app

composer install
yarn install

yarn run watch
cp .env.example .env
php argisan key:generate
php artisan migrate
php artisan seed
php artisan serve
\`\`\`

Go to http://localhost:8000

`
    }
  },
}
</script>
