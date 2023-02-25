import service from '../services/testmonials-service';
const state = {
    usersList: {}
};
const mutations = {
    SET_USERS_LIST: (state, usersList) => {
        state.usersList = usersList;
    }
};
const actions = {
    usersList({commit, dispatch}, params) {
        return service.getUsersList(params).then(({usersList}) => {
            commit('SET_USERS_LIST', usersList);
        });
    }
};

const getters = {
    usersList: state => state.usersList,
};


const testmonials = {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};
export default testmonials;
