/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('map-component', require('./components/MapComponent.vue').default);
Vue.component('info-component', require('./components/InfoComponent.vue').default);
Vue.component('data-component', require('./components/DataComponent.vue').default);
Vue.component('auto-component', require('./components/AutoComponent.vue').default);
Vue.component('comparator-component', require('./components/ComparatorComponent.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


 Vue.config.productionTip = false;
 import Vue from 'vue'
 
 import Chartkick from 'vue-chartkick'
 import Highcharts from 'highcharts'
 import vuetify from './plugins/vuetify';
 Vue.use(Chartkick.use(Highcharts))


 
 



 
 import 'leaflet/dist/leaflet.css';


const app = new Vue({
    el: '#app',
    vuetify,
});
