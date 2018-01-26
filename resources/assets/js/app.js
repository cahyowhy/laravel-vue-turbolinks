/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var Turbolinks = require('turbolinks');
var _ = require('lodash');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('signatures', require('./components/Signatures'));
Vue.component('signature-form', require('./components/SignatureForm'));
Vue.component('paginate', require('vuejs-paginate'));
Vue.component('signature-item', require('./components/SignatureItem'));
Vue.mixin(require('./mixins/vue-turbolinks'));

let el = '#app';

Turbolinks.start();
initApp();
function initApp() {

    if (window.isInitAppPreview) {
        return
    }
    window.isInitAppPreview = true;

    let loadAppPreview = function(e) {
        if (!document.querySelector(el)) {
            return
        }
        if (e.type == 'pageshow' && window.appPreview && !window.appPreview._isDestroyed) {
            return
        }

        window.appPreview = new Vue({
            el
        })
    };

    document.addEventListener("turbolinks:load", loadAppPreview);
    window.addEventListener("pageshow", loadAppPreview);

    document.addEventListener("turbolinks:before-cache", function() {
        if (!document.querySelector(el)) {
            return
        }
        if (window.appPreview) {
            window.appPreview.$destroy()
        }
    });
}