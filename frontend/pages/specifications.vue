<template>
  <main>
    <div>
      <b-nav tabs fill>
        <b-nav-item
          tag="nuxt-link"
          v-for="tab in tradeInTabs"
          :key="tab.id"
          :to="`/specifications/${tab.id}`"
          class="tabs"
        >
          {{ tab.title }}
        </b-nav-item>
      </b-nav>
    </div>
    <div>
      <nuxt-child />
    </div>
  </main>
</template>

<script>
export default {
  computed: {
    tabs() {
      return this.$store.state.informations;
    },
    tradeInTabs () {
      return this.$store.getters.tradeInTabs;
    },
  },
}
</script>

<style scoped>
.tabs {
  color: #06283D !important;
}
</style>