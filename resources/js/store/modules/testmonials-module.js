import service from '../services/testmonials-service';
const state = {
    testimonialsList: {},
    meta: {}
};
const mutations = {
    SET_TESTIMONIALS_LIST: (state, testimonialsList) => {
        state.testimonialsList = testimonialsList;
    },
    SET_META: (state, meta) => {
        state.meta = meta;
    },
};
const actions = {
    testimonialsList({commit, dispatch}, params) {
        return service.getTestimonialsList(params).then(({testimonialsList, meta}) => {
            commit('SET_TESTIMONIALS_LIST', testimonialsList);
            commit('SET_META', meta);
        });
    }
};

const getters = {
    testimonialsList: state => state.testimonialsList.data,
    meta: state => state.meta,
};


const testimonials = {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
export default testimonials;
