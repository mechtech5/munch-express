require('./bootstrap');

window.Vue = require('vue');



Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('menu-container', require('./modules/menu/MenuContainer.vue').default);



const app = new Vue({
    el: '#app'
});
