<template>
  <main>
    <div>
      <b-nav tabs fill>
        <b-nav-item
          tag="nuxt-link"
          v-for="tab in tradeInTabs"
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
      <h1 v-if="payMonthly">Pay: ${{parseFloat(totalPrice / 12).toFixed(2)}} per month. <span>Total: ${{totalPrice}}</span></h1>
      <h1 v-else>Total: ${{totalPrice}}</h1>
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
      return this.$store.state.informations;
    },
    totalPrice () {
      return this.$store.state.price;
    },
    tradeInTabs () {
      return this.$store.getters.tradeInTabs;
    },
    payMonthly () {
      return this.$store.state.selectedSpecs.find(
        selectedSpec => selectedSpec.id === 85
      )
    }
  },
}
</script>

<style>
b-nav {
  display: block !important;
}
</style>