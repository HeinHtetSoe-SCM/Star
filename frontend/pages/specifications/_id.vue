<template>
  <div>
    <div v-if="id !== 6">
        <b-button
        v-for="info in information.children"
        :key="info.id"
        @click="addSpec(info)"
        >
            <b-form-radio
                name="some-radios" 
                :value="info"
                @change="addSpec(info)"
                v-model="selected"
            >
                {{info.title}} <span v-if="info.price != null"> - +${{info.price}}</span>
            </b-form-radio>
        </b-button>
        <div>
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
        </div>
    </div>
    <div v-else-if="id === 6 && this.$store.state.selectedSpecs.find(info => info.id === 23)">
        <b-button
        v-for="info in information.children"
        :key="info.id"
        @click="addSpec(info)"
        >
            <b-form-radio
                name="some-radios" 
                :value="info"
                @change="addSpec(info)"
                v-model="selected"
            >
                {{info.title}} <span v-if="info.price != null"> - +${{info.price}}</span>
            </b-form-radio>
        </b-button>
        <div>
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
        </div>
    </div>
</div>
</template>

<script>
export default {
    data () {
        return {
            id: parseInt(this.$route.params.id),
            selected: this.$store.state.selectedSpecs.find( 
                i => i.parent_id === parseInt(this.$route.params.id) 
                ),
        }
    },
    computed: {
        information () {
            return this.$store.state.informations.find(info => info.id === this.id);
        },
        selectedSpec () {
            return this.$store.state.selectedSpecs;
        },
    },
    methods: {
        addSpec(spec) {
            this.$store.dispatch('pushSpec', spec);
        }
    },
    mounted () {
        console.log(this.$route.params.id)
    }
}
</script>

<style>

</style>