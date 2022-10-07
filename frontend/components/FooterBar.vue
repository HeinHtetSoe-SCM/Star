<template>
  <footer>
    <h1>${{totalPrice}}</h1>
  </footer>
</template>

<script>
export default {
    computed: {
        totalPrice () {
            return this.$store.state.price;
        }
    }
}
</script>

<style>

</style>