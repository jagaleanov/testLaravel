window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router';

const Foo = { template: '<div>foo<router-link to="/foo">Go to Foo</router-link><router-link to="/bar">Go to Bar</router-link><router-link to="/">Go to List</router-link></div>' }



Vue.use(VueRouter);

export default new VueRouter({
    routes: [
        {
            path: '/', 
            name: 'home', 
            component: () => import('../views/DocumentFormComponent.vue'),
        },
        {
            path: '/inscription-form', 
            name: 'inscriptionForm', 
            component: () => import('../views/InscriptionFormComponent.vue'),
        },
        {
            path: '/foo', 
            name: 'foo', 
            component: Foo
        },
    ]
});
