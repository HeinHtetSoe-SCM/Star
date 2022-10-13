<template>
  <div>
    <main>
      <h1>Star Phone 1</h1>
      <p class="buy-link">Collaborated with <a href="https://lol.garena.com">League of Legends</a></p>
      <p class="buy-link">Checkout this new song! <a href="https://www.youtube.com/watch?v=HYsz1hP0BFo">STAR WALKIN'</a></p>
      <NuxtLink to="/specifications/1" class="buy-link">Buy ></NuxtLink>
      <br>
      <img src="~/assets/img/starPhone.jpg" alt="starphone">
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
  data () {
    return {
      selected: '',
    }
  },
  computed: {
    versions () {
      return this.$store.state.versions;
    },
    models () {
      return this.$store.state.models;
    },
    informations () {
      return this.$store.state.informations;
    }
  },
  methods: {
    chooseSpec (version) {
      this.$store.dispatch('chooseVersion', version);
    },
  },
}
</script>

<style scoped>
  main {
    text-align: center;
  }
  img {
    width: 70%;
    height: 70%;
    margin-top: 5px;
  }
  .buy-link {
    font-size: 24px;
  }
</style>
