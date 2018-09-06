const location = window.location;

export default {
    HOST: `${location.protocol}//${location.hostname}:${location.port}`,
    get API_URL(){ //students
        return `${this.HOST}/admin/api`;
    },
    get ADMIN_URL(){ //students
        return `${this.HOST}/admin`;
    }
}