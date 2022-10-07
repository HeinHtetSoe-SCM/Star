<template>
  <main>
  <b-button 
    variant="outline-primary" 
    class="btns"
    v-for="info in informations"
    :key="info.id"
    :to="`/specifications/${info.id}`"
    >
    {{info.title}}
  </b-button>
  <h1>STAR WALKIN'</h1>
  </main>
</template>

<script>
export default {
  name: 'IndexPage',
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
  head () {
    return {
      title: 'Home Page',
    }
  },
  mounted () {
    this.$store.dispatch('fetchSpecs');
  },
}
</script>

<style>
  .btns {
    margin-right: 5px;
  }
</style>
