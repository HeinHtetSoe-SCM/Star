<template>
  <main>
    <div>
      <b-nav tabs fill>
        <b-nav-item
          tag="nuxt-link"
          v-for="tab in tabs"
          :key="tab.id"
          :to="`/specifications/${tab.id}`"
        >
          {{ tab.title }}
        </b-nav-item>
      </b-nav>
    </div>
    <div>
        <nuxt-child :data="data" />
    </div>
    <footer>
      <h1>total: ${{totalPrice}}</h1>
    </footer>
  </main>
</template>

<script>
export default {
  data() {
    return {
      data: this.$store.state.informations,
    }
  },
  computed: {
    tabs() {
      return this.$store.state.informations
    },
    totalPrice () {
            return this.$store.state.price;
        }
  },
}
</script>

<style>
b-nav {
  display: block !important;
}
</style>