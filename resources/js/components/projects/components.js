window.Vue = require('vue');

require('./tasks/components');

Vue.component('project-list', require('./ProjectList.vue').default);
Vue.component('project-card', require('./ProjectCard.vue').default);