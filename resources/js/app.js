/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

import vue from 'vue';

window.Vue = vue;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('query-message', require('./components/base/QueryMessage.vue').default);

Vue.component('films', require('./components/FilmListComponent.vue').default);
Vue.component('FEdit', require('./components/FilmEditComponent.vue').default);
Vue.component("film-create", require('./components/FilmCreateComponent.vue').default);
Vue.component('actors', require('./components/ActorListComponent').default);
Vue.component('AEdit', require('./components/ActorEditComponent').default);
Vue.component('createActor', require('./components/ActorCreateComponent').default);
Vue.component('asearch', require('./components/ActorSearchComponent').default);
Vue.component('actor-component', require('./components/ActorComponent').default);
Vue.component('film-component', require('./components/FilmComponent').default);
Vue.component('actor-light-component', require('./components/ActorLightComponent').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
