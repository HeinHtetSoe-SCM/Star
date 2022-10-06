<template>
  <main>
  <!-- <b-button 
    variant="outline-primary" 
    class="btns"
    v-for="spec in specs"
    :key="spec.id"
    :to="`/specs/${spec.id}`"
    >
    {{spec.title}}
  </b-button> -->
  <article>
    <!-- {{info['data']}} -->
    <ol>
      <li 
        v-for="sample in info" 
        :key="sample.id"
        > 
        {{sample.title}}
        <ol>
          <li 
          v-for="model in sample.children"
          :key="model.id"
          >
          {{model.title}}
          </li>
        </ol>
      </li>
    </ol>
  </article>
  </main>
</template>

<script>
export default {
  name: 'IndexPage',
  data () {
    return {
      info: null,
      selected: '',
    }
  },
  computed: {
    specs () {
      return this.$store.state.specs.all;
    },
    versions () {
      return this.$store.state.versions;
    }
  },
  head () {
    return {
      title: 'Home Page',
    }
  },
  mounted () {
    this.$axios
      .get('/api/starphone')
      .then(response => (this.info = response.data));
    this.$store.dispatch('fetchSpecs');
  },
}
</script>

<style>
  .btns {
    margin-right: 5px;
  }
</style>
