<!--Project Listing Template-->
<template>
  <v-layout row wrap>
    <v-flex xs4 v-for="project in projects" :key="project">
      <v-card color="teal lighten-1" class="white--text">
        <v-card-title>
          <div class="headline">Project Name</div>
        </v-card-title>
        <v-card-text>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nobis, harum est cum vitae aliquid explicabo dolores esse ducimus unde sit molestiae tempora doloremque veritatis blanditiis fugit quaerat cumque molestias?.
        </v-card-text>
        <v-card-actions>
          <v-btn flat dark :to="'/projects/' + n">More</v-btn>
        </v-card-actions>
      </v-card>
    </v-flex>

    <v-flex xs4>
      <projects-create></projects-create>
    </v-flex>
  </v-layout>
</template>

<script>
import ProjectCreate from './Create';
export default {
  computed: {
    projects(){
      return this.$store.state.projects.all;
    }
  },
  components: {
    'projects-create': ProjectCreate
  }
}
</script>