<!--Project Listing Template-->
<template>
  <v-layout row wrap>
    <v-flex xs4 v-for="n in 2" :key="n">
      <v-card color="teal lighten-1" class="white--text">
        <v-card-title>
          <div class="headline">Web Development</div>
        </v-card-title>
        <v-card-text>
          Development of websites on the Internet or intranet by web designer/ web developer professionals.
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
  components: {
    'projects-create': ProjectCreate
  }
}
</script>