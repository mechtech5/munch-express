require('./bootstrap');
require('vue-multiselect/dist/vue-multiselect.min.css');
import VModal from 'vue-js-modal'


window.Vue = require('vue');

Vue.use(VModal)


Vue.component('card-component', require('./components/Card.vue').default);
Vue.component('menu-container', require('./modules/menu/MenuContainer.vue').default);
Vue.component('resto-group', require('./modules/restos/RestoGroup.vue').default);

const app = new Vue({
    el: '#app'
});