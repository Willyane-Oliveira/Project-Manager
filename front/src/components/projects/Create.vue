<!--Project Creation Component-->
<template>
  <v-card color="amber">
    <v-card-title>
      <div class="headline">Add project</div>
    </v-card-title>

    <v-container>
      <v-form ref="form" v-model="valid" xs12>
        <v-text-field
          id="project-title"
          v-model="data.title"
          :rules="validation.title"
          label="Project Title"
          required>
        </v-text-field>

        <div v-show="data.title">
          <v-text-field
            v-model="data.description"
            label="Description"
            outline>
          </v-text-field>

        <v-menu
          ref="menuDate"
          v-model="menuDt"
          :close-on-content-click="false"
          :return-value.sync="due_date">

          <v-text-field
            slot="activator"
            v-model="due_date"
            label="Delivery date"
            readonly>
          </v-text-field>

          <v-date-picker
            v-model="due_date"
            no-title
            scrollable>

            <v-btn flat color="secondary" @click="menuDt = false">Cancel</v-btn>
            <v-btn flat color="primary" @click="$refs.menuDate.save(due_date)">OK</v-btn>
          </v-date-picker>
        </v-menu>

        <v-menu
          ref="menuTime"
          v-model="menuTm"
          :close-on-content-click="false"
          :return-value.sync="due_date_time">

          <v-text-field
            slot="activator"
            v-model="due_date_time"
            label="Delivery time"
            readonly>
          </v-text-field>

          <v-time-picker
            v-model="due_date_time">

            <v-btn flat color="secondary" @click="menuTm=false">Cancel</v-btn>
            <v-btn flat color="primary" @click="$refs.menuTime.save(due_date_time)">OK</v-btn>
          </v-time-picker>
        </v-menu>

          <v-btn flat @click="submit()">Submit</v-btn>

        </div>
      </v-form>
    </v-container>
  </v-card>
</template>

<script>
export default {
  data() {
    return {
      valid: false,
      menuDt: false,
      menuTm: false,
      data: {},
      due_date: null,
      due_date_time: '12:00',
      validation: {
        title: [
          (v) => !!v || "Title is mandatory"
          ],
      },
    };
  },
  methods:{
    submit(){
      this.data.user_id = 1;
      this.data.due_date = this.due_date + ' ' + this.due_date_time + ':00';
      this.$store.dispatch('projects/create', this.data);
    }
  }
};
</script>