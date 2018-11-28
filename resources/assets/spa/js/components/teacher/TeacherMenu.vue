<template src="../templates/menu.html"></template>

<script type="text/javascript">
    import store from '../../store/store';
    import LogoutComponent from '../Logout.vue';

    export default {
        components: {
            'logout': LogoutComponent,
        },
        data() {
            return {
                menus: [
                    {name: 'Minhas turmas', routerName: 'class_informations.list'},
                ],
                brandRouteName: 'class_informations.list'
            }
        },
        computed: {
            isAuth() {
                return store.state.auth.check;
            },
            user() {
                return store.state.auth.user;
            },
            username() {
                return this.isAuth ? store.state.auth.user.name : null;
            }
        }
    };

</script>
