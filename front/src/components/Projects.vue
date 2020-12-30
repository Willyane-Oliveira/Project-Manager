<template>
  <div>
    <h1 class="red">{{ message }}</h1>
    <p>Project Manager</p>
  </div>
</template>

<script>
export default {
  data(){
    return{
      message:'Project Manager'
    }
  },
    mounted(){
      console.log('we are already');
    }
}
</script>

<style>
  .red {
    background-color: red;
    color: white;
  }
</style>