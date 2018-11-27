import {Jwt} from './resources';
import LocalStorage from './localstorage';

export default {
    get token() {
        return LocalStorage.get();
    },
    set token(value) {
        LocalStorage.set('token', value);
    },
    accessToken(username, password){
        return Jwt.accessToken(username,password)
            .then((response) => {
                this.token = response.data.token;
            })
    },
    revokeToken(){

    }
};