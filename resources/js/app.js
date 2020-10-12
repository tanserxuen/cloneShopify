/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
// import { ValidationProvider, extend } from 'vee-validate';
// import { required } from 'vee-validate/dist/rules';

window.Vue = require('vue');
// import Vue from 'vue';
// import { ValidationProvider } from 'vee-validate';
// import { extend } from 'vee-validate';
// import { required } from 'vee-validate/dist/rules';

// Add a rule.

// Override the default message.
// extend('required', {
//   ...required,
//   message: 'This field is required'
// });

// // Register it globally
// Vue.component('ValidationProvider', ValidationProvider);

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('articles', require('./components/Articles.vue').default);
// Vue.component('ValidationProvider', ValidationProvider);

//staff
Vue.component('tea-staff', require('./components/Tea_staff.vue').default);

//customer
Vue.component('tea-cust', require('./components/Tea_cust.vue').default);
Vue.component('checkout', require('./components/CheckOut.vue').default);
Vue.component('loginn', require('./components/Login.vue').default);
Vue.component('register', require('./components/Register.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
