<template>
  <div>
    <b-card 
      title="Your Star Phone's" 
      sub-title="Selected Specifications"
      img-src="~/assets/img/starPhone.jpg"
      img-right
      >
      <hr>
      <b-card-text v-for="info in checkOut" :key="info.id">
        <span style="color: #06283d">&#9733; {{ info.title }}</span> :
        {{ info.description }}
        <span v-if="info.parent_id === 6">
          , {{ selectedTradeInStorage ? selectedTradeInStorage.title : '' }}
        </span>
      </b-card-text>
      <b-list-group>
      <b-list-group-item v-if="payMonthly">
        Pay: ${{ parseFloat(totalPrice / 12).toFixed(2) }} per month.
        <span>Total: ${{ totalPrice }}</span>
      </b-list-group-item>
      <b-list-group-item v-else>Total: ${{ totalPrice }}</b-list-group-item>
    </b-list-group>
    </b-card>
  </div>
</template>

<script>
export default {
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
  img {
    width: 70%;
    height: 70%;
    margin-top: 5px;
  }
</style>