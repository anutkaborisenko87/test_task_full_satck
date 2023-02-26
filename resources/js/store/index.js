import Vue from 'vue';
import Vuex from 'vuex';
import testimonials from './modules/testmonials-module';
Vue.use(Vuex);
const store =  new Vuex.Store({
    state: {
        errors: [],
    },
    modules: {
        testimonials
    },
});
export default store
