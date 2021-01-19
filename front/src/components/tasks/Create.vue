<!--Task registration form-->
<template>
  <v-form v-model="valid" ref="form">
    <v-text-field
      v-model="data.title"
      label="Add task"
      :rules="validation.title"
      required
      @keyup.native.enter="submit()">
    </v-text-field>
  </v-form>
</template>

<script>
export default {
  data(){
    return{
      data:{},
      valid: false,
      validation:{
        title:[
          v => !!v || 'Title is required'
        ]
      }
    }
  },
  methods:{
    submit(){
      console.log(this.data)
    }
  }
}
</script>