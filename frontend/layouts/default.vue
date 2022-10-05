<template>
  <b-container>
    <NavBar />
    <nuxt />
  </b-container>
</template>

<script>
import NavBar from "../components/NavBar.vue";
export default {
  components: [
    NavBar
  ]
}

</script>

<style>
  h1 {
    color: blueviolet;
  }
</style>