<template>
  <div>
    <b-row class="row">
      <b-col>
        <div class="content">
          <b-card title="Your Star Phone's" sub-title="Selected Specifications">
            <b-card-text v-for="info in checkOut" :key="info.id">
              <span style="color: #06283d">&#9733; {{ info.title }}</span> :
              {{ info.description }}
              <span v-if="info.parent_id === 6">
                ,
                {{ selectedTradeInStorage ? selectedTradeInStorage.title : '' }}
              </span>
            </b-card-text>
            <b-card-text>
                Total: ${{totalPrice}}
            </b-card-text>
          </b-card>
        </div>
      </b-col>
      <b-col>
        <div>
          <b-card :title="cardTitles[id-1].title">
            <div v-if="relatedModels && id === 2">
              <b-button
                v-for="info in relatedModels"
                :key="info.id"
                @click="addSpec(info)"
                class="option"
                variant="light"
              >
                <b-form-radio
                  name="specifications"
                  :value="info"
                  @change="addSpec(info)"
                  v-model="selected"
                >
                  {{ info.title }}
                  <span v-if="info.price != null"> ${{ info.price }}</span>
                </b-form-radio>
              </b-button>
            </div>
            <div v-else-if="id === 6">
              <b-form-select
                v-model="selected"
                :options="informationOptions"
                @change="addSpec(selected)"
                class="form-select"
              >
              </b-form-select>
              <div>
                <h4>Storage</h4>
                <b-button
                  v-for="info in tradeInSmartphoneStorages"
                  :key="info.id"
                  @click="tradeInDiscount(info)"
                  class="option"
                  variant="light"
                >
                  <b-form-radio
                    name="storages"
                    :value="info"
                    @change="tradeInDiscount(info)"
                    v-model="selectedTradeInStorage"
                  >
                    {{ info.title }}
                    <span v-if="info.price != null"> -${{ info.price }}</span>
                  </b-form-radio>
                </b-button>
              </div>
            </div>
            <div v-else>
              <b-button
                v-for="info in information.children"
                :key="info.id"
                @click="addSpec(info)"
                class="option"
                variant="light"
              >
                <b-form-radio
                  name="some-radios"
                  :value="info"
                  @change="addSpec(info)"
                  v-model="selected"
                >
                  {{ info.title }}
                  <span v-if="info.price != null"> ${{ info.price }}</span>
                </b-form-radio>
              </b-button>
            </div>
            <div>
              <b-button v-if="id === 7" :to="`/checkout`"> Check out </b-button>
            </div>
          </b-card>
        </div>
      </b-col>
    </b-row>
  </div>
</template>

<script>
export default {
  data() {
    return {
      id: parseInt(this.$route.params.id),
      selected: this.$store.state.selectedSpecs.find(
        (i) => i.parent_id === parseInt(this.$route.params.id)
      ),
    }
  },
  computed: {
    information() {
      return this.$store.state.informations.find((info) => info.id === this.id)
    },
    cardTitles() {
      return this.$store.state.informations;
    },
    informationOptions() {
      const options = this.$store.state.informations.find(
        (info) => info.id === this.id
      )
      return options.children.map((option) => {
        return {
          value: option,
          text: option.title,
        }
      })
    },
    tradeInSmartphoneStorageOptions() {
      const options = this.$store.getters.tradeInSmartphoneStorages
      if (options) {
        return options.map((option) => {
          return {
            value: option,
            text: option.title,
          }
        })
      } else {
        return []
      }
    },
    selectedSpec() {
      return this.$store.state.selectedSpecs
    },
    relatedModels() {
      return this.$store.getters.standardModels
    },
    tradeInSmartphoneStorages() {
      return this.$store.getters.tradeInSmartphoneStorages
    },
    selectedTradeInStorage() {
      if (this.$store.state.selectedSpecs.find((item) => item.id === 23)) {
        return this.$store.state.tradeInStorages.find((i) =>
          this.$store.getters.tradeInSmartphoneStorages.find(
            (j) => j.parent_id === i.parent_id
          )
        )
      } else {
        return false
      }
    },
    checkOut() {
      return this.$store.getters.checkOutCard
    },
    checkOutStorage() {
      if (this.$store.state.tradeInStorages > 0) {
        return this.$store.state.tradeInStorages[0]
      } else {
        return {
          title: '',
        }
      }
    },
    totalPrice () {
      return this.$store.state.price;
    },
  },
  methods: {
    addSpec(spec) {
      this.$store.dispatch('pushSpec', spec)
    },
    tradeInDiscount(spec) {
      this.$store.dispatch('tradeInDiscount', spec)
    },
  },
}
</script>

<style scoped>
.option {
  display: block;
  width: 300px;
  padding: 20px 0 20px 10px;
  margin: 10px 0 10px 20px;
  text-align: left;
}
.row {
  padding: 50px 0 50px;
  height: 480px;
}
.form-select {
    margin-bottom: 10px;
}
</style>