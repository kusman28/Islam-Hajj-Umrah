/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import { Form, HasError, AlertError } from 'vform'
import moment from 'moment'

window.Form = Form;
window.Hajj = Form;
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

import VueProgressBar from 'vue-progressbar'
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '3px'
})

// Sweetalert
import swal from 'sweetalert2'
window.swal = swal;

const toast = swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
})
window.toast = toast;

// Routes
import VueRouter from 'vue-router'
Vue.use(VueRouter)
let routes = [
    { path: '/dashboard', component: require('./components/Dashboard').default },
    { path: '/pendingHajj', component: require('./components/PendingHajj').default },
    { path: '/pendingUmrah', component: require('./components/PendingUmrah').default },
    { path: '/pendingRegistration/:id', component: require('./components/PendingRegistration').default },
    { path: '/registered', component: require('./components/Registered').default },
    { path: '/hajjDocuments', component: require('./components/HajjDocument').default },
    // { path: '*', component: require('./components/NotFound').default}
  ]
const router = new VueRouter({
	mode: 'history',
  	routes // short for `routes: routes`
})
// End of Routes


// Text filter
Vue.filter('upCase', function(text){
	// return text.toUpperCase();
  return text.charAt(0).toUpperCase() + text.slice(1)
});
Vue.filter('capCase', function(text){
	return text.toUpperCase();
});
Vue.filter('myDate', function(created){
  return moment(created).format('MMMM Do YYYY');
})
Vue.filter('myTime', function(created){
  return moment(created).format('hh:mm a');
})

Vue.component(
  'passport-clients',
  require('./components/passport/Clients.vue').default
);

Vue.component(
  'passport-authorized-clients',
  require('./components/passport/AuthorizedClients.vue').default
);

Vue.component(
  'passport-personal-access-tokens',
  require('./components/passport/PersonalAccessTokens.vue').default
);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
});
