<template>
  <div>
    <v-navigation-drawer app v-model="drawer" clipped>
      <v-list>

        <v-list-tile to="/projects">
          <v-list-tile-action>
            <v-icon>dashboard</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title> Projects </v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile @click="">
          <v-list-tile-action>
            <v-icon>today</v-icon>
          </v-list-tile-action>
          <v-list-tile-content>
            <v-list-tile-title> Schedule </v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

      </v-list>
    </v-navigation-drawer>

    <v-toolbar app clipped-left color="light-blue">
      <v-toolbar-side-icon @click.prevent="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title>Project Manager</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-toolbar-items>
        <v-btn flat><v-icon>exit_to_app</v-icon>Sair</v-btn>
      </v-toolbar-items>  
    </v-toolbar>
  </div>
</template>

// drawer manages whether the navigation drawer is open or closed
<script>
export default {
  data() {
    return {
      drawer: true //when the navigation is open
    }
  }
}
</script>