<template>
  <b-container>
    <article>
        <h1>{{ spec.title }}</h1>
        <p>{{ spec.content }}</p>
    </article>
    <aside>
        <h3>Other specs</h3>
        <ul>
            <li v-for="(related, i) in relatedSpecs" :key="i">
                <nuxt-link :to="`/specs/${related.id}`">{{related.title}}</nuxt-link>
            </li>
        </ul>
    </aside>
  </b-container>
</template>

<script>
export default {
    data () {
        return {
            id: this.$route.params.id
        }
    },
    computed: {
        spec () {
            return this.$store.state.specs.all.find(spec => spec.id === this.id);
        },
        relatedSpecs () {
            return this.$store.state.specs.all.filter(spec => spec.id !== this.id)
        }
    },
    head () {
        return {
            title: this.spec.title
        }
    }
}
</script>

<style>

</style>