
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

import VueRouter from 'vue-router';
Vue.use(VueRouter);

const routes = [
{
  path: '/vue-user',
  name: 'userIndex',
  component: require('./components/user/index.vue')
},
{
  path: '/vue-user/create',
  name: 'userCreate',
  component: require('./components/user/create.vue')
},
{
  path: '/vue-user/:id',
  name: 'userView',
  component: require('./components/user/view.vue')
}
]
const router = new VueRouter({ routes });
const app = new Vue({
  router
}).$mount('#app');
