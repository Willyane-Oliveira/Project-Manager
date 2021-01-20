<!--create a new section-->
<template>
  <v-card color="indigo lighten-3">
    <v-card-title primary-title>
      <div class="headline">
        New Section
      </div>
    </v-card-title>
    <v-card-text>
      <v-form v-model="valid" ref="form">
        <v-text-field
          v-model="data.title"
          label="Title"
          :rules="validation.title"
          required>
        </v-text-field>

        <v-text-field
          v-model="data.description"
          label="Description"
          outline>
        </v-text-field>

        <v-btn
          :disabled="!valid"
          @click="submit">Submit
        </v-btn>
      </v-form>
    </v-card-text>
  </v-card>
</template>

<script>
export default {
  data(){
    return{
      data: {},
      valid: false,
      validation: {
        title:[
          v=> !!v || 'Title is required'
        ]
      }
    }
  },
  methods:{
    submit(){
      this.data.project_id = this.$route.params.id;
      this.data.user_id = 1;
      this.$store.dispatch('sections/create', this.data).then((res) => {
        this.$refs.form.reset();
      })
    }
  }
}
</script>