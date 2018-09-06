<template>
    <div>
        <div class="form-group">
            <label class="control-label">Select Student</label>
            <select class="form-control" name="students"></select>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th></th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="student in students">
                <td>Excluir</td>
                <td>{{student.user.name}}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<!--<script>
    import 'select2';
    import store from '../../store/store';

    export default {
        props: ['classInformation'],
        computed: {
            students(){
                return store.state.classStudent.students;
            },
        },
        mounted(){
            store.dispatch('classStudent/query', this.classInformation);
            $("select[name=students]").select2({
                ajax: {
                    url: ``,
                    dataType: 'json',
                    delay: 250,
                    processResults(data){

                    }
                }
            });
        }
    }
</script>-->

<script>
    import ADMIN_CONFIG from '../../services/adminConfig';
    import store from '../../store/store';
    import 'select2';

    export default {
        props: ['classInformation'],
        computed: {
            students(){
                return store.state.classStudent.students;
            }
        },
        mounted(){
            store.dispatch('classStudent/query', this.classInformation);
          /*  $("select[name=students]").select2({
                ajax: {
                    url: `${ADMIN_CONFIG.API_URL}/students`,
                    dataType: 'json',
                    delay: 250,
                    data(params){
                        return {
                            q: params.term
                        }
                    },
                    processResults(data){
                        return {
                            results: data.map((student) => {
                                return {id: student.id, text: student.user.name}
                            })
                        }
                    }
                },
                minimumInputLength: 1,
            });*/
            $("select[name=students]").select2({
                ajax: {
                    url: `${ADMIN_CONFIG.API_URL}/students`,
                    dataType: 'json',
                    delay: 250,
                    data(params){
                        return {
                            q: params.term
                        }
                    },
                    processResults(data){
                        return {
                            results: data.map((student) => {
                                return {id: student.id, text: student.user.name}
                            })
                        }
                    }
                },
                minimumInputLength: 1,
            });
        },
        methods: {
            destroy(student){
                if(confirm('Do you want to remove this student?')){
                    store.dispatch('classStudent/destroy', {
                        studentId: student.id,
                        classInformationId: this.classInformation
                    })
                }
            }
        }
    }
</script>
