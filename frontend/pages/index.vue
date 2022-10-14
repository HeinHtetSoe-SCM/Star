<template>
  <div>
    <main>
      <b-card 
        title="Star Phone 1" 
        sub-title="From $860 or $71.67/mo. for 12 mo."
        img-src="~/assets/img/starPhone.jpg"
        img-right
        border-variant="dark"
        >
        <hr>
        <b-card-text>
          Display: Super Retina XDR OLED<br>
          Screen-size: 6.1 inches <br>
          Resolution: 1170 x 2532 pixels <br>
          OS: starOS 1.0 <br>
          Chipset: Star Guardian Gen1 (5nm) <br>
          Main Camera: dual 48MP 
        </b-card-text>
        <b-button :to="`/specifications/1`" variant="primary">Buy Now</b-button>
      </b-card>
    </main>
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  head () {
    return {
      title: 'Star',
    }
  },
  mounted () {
    this.$store.dispatch('fetchSpecs');
  },
}
</script>

<style scoped>
  img {
    width: 70%;
    height: 70%;
    margin-top: 5px;
  }
</style>
