<template>
  <v-layout row wrap>
    <v-flex xs12>
      <h2 class="display-1 mb-4">Projects</h2>
    </v-flex>

    <v-container grid-list-md>
      <router-view></router-view> <!--children route. See Index.js-->
    </v-container>

  </v-layout>
</template>

<script>
export default {
  data() {
    return {
      message: "Project Manager",
    };
  },
  mounted() {
    console.log("we are already");
  },
};
</script>

<style>
.s {
  background-color: rgb(73, 0, 126);
  color: white;
}
</style>