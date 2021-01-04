<!--List of sessions and their respective tasks-->
<template>
  <v-layout id="sections-container" row>

    <v-flex xs3 v-for="n in 3" :key="n">
      <v-card color="blue-grey lighten-4">
        <v-card-title primary-title class="green white--text">
          <div class="headline">Section {{ n }}</div>
        </v-card-title>
        <v-card-text>
          About
        </v-card-text>
        <v-card-text>
          Tasks List
        </v-card-text>
        <v-card-text>
          Add New Tasks
        </v-card-text>
      </v-card>
    </v-flex>

    <v-flex xs3>
      <create/><!--create a new section-->
    </v-flex>

  </v-layout>
</template>

<script>
import create from './Create';
export default {
  components:{
    create
  }
}
</script>