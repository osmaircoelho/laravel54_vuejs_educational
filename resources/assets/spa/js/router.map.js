export default [
   /* {
        name: 'class_informations.list',
        path: '/classes',
        component: require('./components/teacher/TeacherClassInformationList.vue'),
        meta: {
            auth: true
        }
    },*/

    {
        name: 'class_teachings.list',
        path: 'classes',
        component: require('./components/teacher/TeacherClassTeachingList.vue'),
        meta: {
            auth: true
        }
    },
    {
        name: 'class_tests.list',
        path: 'classes/:class_teaching/tests',
        component: require('./components/teacher/class_test/TeacherClassTestList.vue'),
        meta: {
            auth: true
        }
    },
    {
        name: 'class_tests.create_date',
        path: 'class_teachings/:class_teaching/tests/create_data',
        component: require('./components/teacher/class_test/TeacherClassTestStepData.vue'),
        meta: {
            auth: true
        }
    },
    {
        name: 'login',
        path: '/login',
        component: require('./components/Login.vue')
    },
    {path: '*', redirect: '/login'}
];
