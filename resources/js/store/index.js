import Vue from 'vue';
import Vuex from 'vuex';
import testmonials from './modules/testmonials-module';
Vue.use(Vuex);
const store =  new Vuex.Store({
    state: {
        errors: [],
    },
    modules: {
        testmonials
    },
});
export default store
