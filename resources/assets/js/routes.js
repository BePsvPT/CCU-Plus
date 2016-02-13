import signUp from './templates/sign-up.vue';
import coursesIndex from './templates/courses/index.vue';
import coursesShow from './templates/courses/show.vue';
import courseLite from './templates/ecourse-lite.vue';
import notFound from './templates/not-found.vue';

let Vue = require('vue');

export default {
  routes: {
    '/': {
      name: 'home',
      component: Vue.extend({template: `<h1 class="center">Hello World!</h1>`})
    },
    '/sign-up': {
      name: 'sign-up',
      component: signUp
    },
    '/courses': {
      name: 'courses.index',
      component: coursesIndex
    },
    '/courses/:code': {
      name: 'courses.show',
      component: coursesShow
    },
    '/ecourse-lite': {
      name: 'ecourse-lite',
      component: courseLite
    },
    '/trading': {
      name: 'trading',
      component: Vue.extend({template: `<h1 class="center">敬請期待！</h1>`})
    },
    '*': {
      name: 'not-found',
      component: notFound
    }
  },

  afterEach(transition) {
    ga('send', 'pageview', transition.to.path);
  }
}
