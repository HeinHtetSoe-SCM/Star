<template>
  <div>
    <h1>Star Phone Specifications</h1>
    <h3 
    v-for="spec in checkOut"
    :key="spec.id"
    >
        <span style="color:blueviolet;">{{spec.title}}</span> : {{spec.description}} 
        <span v-if="spec.parent_id === 6">
            , {{selectedTradeInStorage.title}}
        </span>
    </h3>
    <footer>
      <h1 v-if="payMonthly">Pay: ${{parseFloat(totalPrice / 12).toFixed(2)}} per month. <span>Total: ${{totalPrice}}</span></h1>
      <h1 v-else>Total: ${{totalPrice}}</h1>
    </footer>
  </div>
</template>

<script>
export default {
    data () {
        return {
            
        }
    },
    computed: {
        checkOut () {
            return this.$store.getters.checkOut;
        },
        payMonthly () {
            return this.$store.state.selectedSpecs.find(
                selectedSpec => selectedSpec.id === 85
            )
        },
        totalPrice () {
            return this.$store.state.price;
        },
        selectedTradeInStorage () {
            if(this.$store.state.selectedSpecs.find(
                item => item.id === 23
            )) {
                return this.$store.state.tradeInStorages.find(
                    i => this.$store.getters.tradeInSmartphoneStorages.find(j => j.parent_id === i.parent_id)
                )
            } else {
                return false;
            }
        }
    }
}
</script>

<style>

</style>