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
        <nuxt-child :data="data" />
    </div>
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
    tradeInTabs () {
      return this.$store.getters.tradeInTabs;
    },
  },
}
</script>

<style scoped>
b-nav {
  display: block !important;
}
.tabs {
  color: #06283D !important;
}
</style>