<!--List of sessions and their respective tasks-->
<template>
  <v-layout id="sections-container" row>

    <v-flex xs3 v-for="n in 3" :key="n">
      <v-card color="deep-purple lighten-4">
        <v-card-title primary-title class="deep-purple darken-4 white--text">
          <div class="headline">Section {{ n }}</div>
        </v-card-title>
        <v-card-text>
          About section
        </v-card-text>
        <v-card-text>
          <tasks/> <!--List tasks-->
        </v-card-text>
        <v-card-text>
          <create-task/> <!--Create new tasks-->
        </v-card-text>
      </v-card>
    </v-flex>

    <v-flex xs3>
      <create/><!--Create a new section-->
    </v-flex>

  </v-layout>
</template>

<script>
import create from './Create';
import tasks from '../tasks/List';
import tasksCreate from '../tasks/Create';

export default {
  components:{
    create,
    tasks,
    'create-task': tasksCreate
  }
}
</script>