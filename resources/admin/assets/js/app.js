/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('modal-new-package', require('./components/Packages/AddNewPackage.vue').default);
Vue.component('package-edit', require('./components/Packages/Edit.vue').default);
Vue.component('package-edit-button', require('./components/Packages/Button/Edit.vue').default);
Vue.component('faq-list', require('./components/Faq/Insert.vue').default);
Vue.component('faq-edit-button', require('./components/Faq/Buttons/Edit.vue').default);
Vue.component('faq-edit', require('./components/Faq/Edit.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.EventBus = new Vue();

Vue.prototype.InvestingPartner = window.InvestingPartner;

const app = new Vue({
    el: '#content',
});
