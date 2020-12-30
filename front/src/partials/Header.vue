<template>
  <v-navigation-drawer app v-model="drawer" clipped>
    <v-list>
      <v-list-tile to="/">
        <v-list-tile-action>
          <v-icon>home</v-icon>
        </v-list-tile-action>
        <v-list-tile-content>
          <v-list-tile-title>
            Home
          </v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile>
      
      <v-list-tile to="/projects">
        <v-list-tile-action>
          <v-icon>dashboard</v-icon>
        </v-list-tile-action>
        <v-list-tile-content>
          <v-list-tile-title>
            Projects
          </v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile>
    </v-list>  
  </v-navigation-drawer>
</template>

// drawer manages whether the navigation is open or closed
<script>
export default{
  data(){
    return{
      drawer: true //when the navigation is open
    }
  }
}
</script>