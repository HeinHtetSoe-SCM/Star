<template>
  <div>
    <h1>Star Phone Specifications</h1>
    <b-card title="Your Star Phone's" sub-title="Selected Specifications">
      <b-card-text v-for="info in checkOut" :key="info.id">
        <span style="color: #06283d">&#9733; {{ info.title }}</span> :
        {{ info.description }}
        <span v-if="info.parent_id === 6">
          , {{ selectedTradeInStorage ? selectedTradeInStorage.title : '' }}
        </span>
      </b-card-text>
    </b-card>
    <footer>
      <h1 v-if="payMonthly">
        Pay: ${{ parseFloat(totalPrice / 12).toFixed(2) }} per month.
        <span>Total: ${{ totalPrice }}</span>
      </h1>
      <h1 v-else>Total: ${{ totalPrice }}</h1>
    </footer>
  </div>
</template>

<script>
export default {
  data() {
    return {}
  },
  computed: {
    checkOut() {
      return this.$store.getters.checkOut
    },
    payMonthly() {
      return this.$store.state.selectedSpecs.find(
        (selectedSpec) => selectedSpec.id === 85
      )
    },
    totalPrice() {
      return this.$store.state.price
    },
    selectedTradeInStorage() {
      if (this.$store.state.selectedSpecs.find((item) => item.id === 23)) {
        return this.$store.state.tradeInStorages.find((i) =>
          this.$store.getters.tradeInSmartphoneStorages.find(
            (j) => j.parent_id === i.parent_id
          )
        )
      } else {
        return {}
      }
    },
  },
}
</script>

<style>
</style>