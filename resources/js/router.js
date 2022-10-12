import Vue from "vue";
import VueRouter from 'vue-router';

Vue.use(VueRouter);


import MainComponent from './components/MainComponent'
export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: MainComponent
        },
    ],
});
