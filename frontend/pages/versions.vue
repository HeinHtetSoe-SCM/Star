<template>
  <b-container>
    <h1>Star Phone  </h1>
    <b-form-group label="Individual radios" v-slot="{ ariaDescribedby }">
      <b-form-radio 
      v-for="version in versions"
      :key="version.id"
      v-model="selected"
      :aria-describedby="ariaDescribedby" 
      name="versions" 
      value="version.title"
      >
      {{version.title}}
      </b-form-radio>
    </b-form-group>
  </b-container>
</template>

<script>
import { version } from 'vue/types/umd';

export default {
  computed: {
    versions () {
      return this.$store.state.versions;
    }
  },
}
</script>

<style>

</style>