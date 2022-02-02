<template>
  <div class="container">
    <div class="row">
      <div class="page-header">
        <h1>Avaliacoes de
          <small>
            <small>{{classInformationName}}</small>
          </small>
        </h1>
      </div>
      <router-link :to="routeClassTestCreate" class="btn btn-primary">
        <i class="fa fa-plus"></i>
        Nova avaliacao
      </router-link>
      <table class="table table-striped">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Inicio</th>
            <th>Fim</th>
            <th>Questoes</th>
            <th>Pontos</th>
            <th>Acoes</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="classTest in classTests">
          <td>{{classTest.name}}</td>
          <td>{{classTest.date_start}}</td>
          <td>{{classTest.date_end}}</td>
          <td>{{classTest.total_questions}}</td>
          <td>{{classTest.total_points}}</td>
          <td>

          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>
<script type="text/javascript">

  import store from '../../../store/store';
  import classInformationMixin from '../../../mixins/class_information.mixin'

 export default {
   mixins: [classInformationMixin],
    computed: {
      classTests() {
        return store.state.teacher.classTest.classTests;
      },
      routeClassTestCrete(){
        return{
          name: 'class_tests.create_data',
          param: {
            'class_teaching': this.$route.params.class_teaching
          }
        }
      }

    },
      mounted(){
        let classTeachingId = this.$route.params.class_teaching;
        store.dispatch('teacher/classTest/query', classTeachingId);
        store.dispatch('teacher/classTeaching/get',classTeachingId);

      },
    methods: {
    }
  }
</script>
