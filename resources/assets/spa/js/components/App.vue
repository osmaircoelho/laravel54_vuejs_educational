<template>
    <div>
        <teacher-menu></teacher-menu>
        <router-view></router-view>
    </div>
</template>

<script type="text/javascript">
    import TeacherMenuComponent from './teacher/TeacherMenu.vue';
    import Logout from "./Logout";

    export default {
        components :{
            Logout,
            'teacher-menu' : TeacherMenuComponent
        }
    }
</script>