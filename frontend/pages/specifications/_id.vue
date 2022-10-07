<template>
  <main>
    <h1>{{information.title}}</h1>
    <h4>{{information.title}}</h4>
    <b-form-group v-slot="{ ariaDescribedby }">
        <b-form-radio 
            v-for="info in information.children"
            :aria-describedby="ariaDescribedby" 
            name="some-radios" 
            value="info.id"
            :key="info.id"
            >
            {{info.title}} <span v-if="info.price != null"> - +${{info.price}}</span>
        </b-form-radio>
    </b-form-group>
    <br>
    <b-button 
        variant="outline-primary" 
        v-if="id != 1"
        :to="`/specifications/${id-1}`"
        >
        Previous
    </b-button>
    <b-button 
        variant="outline-primary" 
        v-if="id != 7"
        :to="`/specifications/${id+1}`"
        >
        Next
    </b-button>
  </main>
</template>

<script>
export default {
    data () {
        return {
            id: parseInt(this.$route.params.id),
        }
    },
    computed: {
        information () {
            return this.$store.state.informations.find(info => info.id === this.id);
        },
        price () {
            return this.$store.state.price;
        },
    }
}
</script>

<style>

</style>