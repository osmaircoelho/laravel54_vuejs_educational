import JwtToken from '../services/jwt-token';

const state = {
    user: null,
    check: null
};

const mutations = {
    authenticated(state){

    },
    unauthenticated(state){

    }
};

const actions = {
    login(context, {username, password}){
        return JwtToken.accessToken(username, password);
    },
    logout(){
        return JwtToken.revokeToken();
    }
};

const module = {
    namespaced: true,
    state, mutations, actions
};

export default module;