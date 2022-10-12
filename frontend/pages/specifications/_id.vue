<template>
  <div>
    <div v-if="relatedModels && id === 2">
        <b-button
        v-for="info in relatedModels"
        :key="info.id"
        @click="addSpec(info)"
        >
            <b-form-radio
                name="specifications" 
                :value="info"
                @change="addSpec(info)"
                v-model="selected"
            >
                {{info.title}} <span v-if="info.price != null"> ${{info.price}}</span>
            </b-form-radio>
        </b-button>      
    </div>
    <div v-else-if="id === 6">
        <b-button
        v-for="info in information.children"
        :key="info.id"
        @click="addSpec(info)"
        >
            <b-form-radio
                name="smartphones" 
                :value="info"
                @change="addSpec(info)"
                v-model="selected"
            >
                {{info.title}} <span v-if="info.price != null"> ${{info.price}}</span>
            </b-form-radio>
        </b-button>
        <div>
            <b-button
            v-for="info in tradeInSmartphoneStorages"
            variant="primary"
            :key="info.id"
            @click="tradeInDiscount(info)"
            >
                <b-form-radio
                    name="storages" 
                    :value="info"
                    @change="tradeInDiscount(info)"
                    v-model="selectedTradeInStorage"
                    >
                    {{info.title}} <span v-if="info.price != null"> -${{info.price}}</span>
                </b-form-radio>
            </b-button>
        </div>
    </div>
    <div v-else>
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
                {{info.title}} <span v-if="info.price != null"> ${{info.price}}</span>
            </b-form-radio>
        </b-button>
    </div>
    <div>
        <b-button 
        v-if="id === 7"
        :to="`/checkout`"
        >
            Check out
        </b-button>
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
        relatedModels () {
            return this.$store.getters.standardModels;
        },
        tradeInSmartphoneStorages () {
            return this.$store.getters.tradeInSmartphoneStorages;
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
    },
    methods: {
        addSpec(spec) {
            this.$store.dispatch('pushSpec', spec);
        },
        tradeInDiscount (spec) {
            this.$store.dispatch('tradeInDiscount', spec);
        }
    },
}
</script>

<style>

</style>