<template>
  <b-container>
    <NavBar />
    <nuxt />
  </b-container>
</template>

<script>
export default {
  mounted() {
    this.$store.dispatch('fetchSpecs')
  },
}
</script> 

<style>
h1 {
  color: #06283d;
}
</style>