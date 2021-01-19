<!--Project Visualization Component-->
<template>
  <v-layout row wrap>
    <v-flex xs12>
      <h2 class="mb-2">Project Name</h2>

      <p>About project</p>
    </v-flex>

    <sections/>

    <v-flex xs12>
      <v-btn to="/projects">Back</v-btn>
    </v-flex>

    <show-task/>

  </v-layout>
</template>

<script>
import sections from '../sections/List';
import showTasks from '../tasks/Show';

export default {
  components:{
    sections,
    'show-task': showTasks
  }
}
</script>