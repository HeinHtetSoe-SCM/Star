<template>
  <div>
    <b-row class="row">
      <!-- Show selected specifications -->
      <b-col>
        <div class="content">
          <b-card title="Your Star Phone's" sub-title="Selected Specifications">
            <hr />
            <b-card-text v-for="info in checkOut" :key="info.id">
              <span style="color: #06283d">&#9733; {{ info.title }}</span> :
              {{ info.description }}
              <span v-if="info.parent_id === tradeInSmartPhonePageId">
                ,
                {{ selectedTradeInStorage ? selectedTradeInStorage.title : '' }}
              </span>
            </b-card-text>
            <b-card-text> Total: ${{ totalPrice }} </b-card-text>
          </b-card>
        </div>
      </b-col>
      <!-- specification selection -->
      <b-col>
        <div>
          <b-card :title="cardTitles[id - 1].title">
            <!-- show at model page  -->
            <div v-if="relatedModels && id === modelPageId">
              <b-card-text
                v-for="info in relatedModels"
                :key="info.id"
                class="option"
                variant="light"
              >
                <b-form-radio
                  v-model="selected"
                  name="specifications"
                  :value="info"
                  @change="addSpec(info)"
                >
                  <strong>{{ info.title }}</strong>
                  <br />
                  <span v-if="info.price != null"> ${{ info.price }}</span>
                </b-form-radio>
              </b-card-text>
            </div>
            <!-- show at color page -->
            <div v-else-if="id === colorPageId">
              <b-button
                v-for="(info, i) in information.children"
                :key="i"
                :style="{
                  backgroundColor: colors[i],
                  color: colors[i],
                  borderRadius: '50%',
                  marginRight: '5px',
                  marginLeft: '5px',
                  width: '50px',
                  height: '50px',
                }"
                @click="addSpec(info)"
              >
              </b-button>
            </div>
            <!-- show at trade in smartphone page -->
            <div v-else-if="id === tradeInSmartPhonePageId">
              <b-form-select
                v-model="selected"
                :options="informationOptions"
                class="form-select"
                @change="addSpec(selected)"
              >
              </b-form-select>
              <div>
                <h4>Storage</h4>
                <b-card-text
                  v-for="info in tradeInSmartphoneStorages"
                  :key="info.id"
                  class="option"
                  variant="light"
                >
                  <b-form-radio
                    v-model="selectedTradeInStorage"
                    name="storages"
                    :value="info"
                    @change="tradeInDiscount(info)"
                  >
                    <strong>{{ info.title }}</strong>
                    <br />
                    <span v-if="info.price != null">
                      Discount: ${{ info.price }}</span
                    >
                  </b-form-radio>
                </b-card-text>
              </div>
            </div>
            <div v-else>
              <b-card-text
                v-for="(info, i) in information.children"
                :key="i"
                class="option"
                variant="light"
              >
                <b-form-radio
                  v-model="selected"
                  name="some-radios"
                  :value="info"
                  @change="addSpec(info)"
                >
                  <strong>{{ info.title }}</strong>
                  <br />
                  <span v-if="id === paymentPageId && i === payMonthlyItemId"
                    >for 12 months with 0 interest</span
                  >
                  <span v-if="info.price != null"> ${{ info.price }}</span>
                </b-form-radio>
              </b-card-text>
            </div>
            <div>
              <b-button
                v-if="id === paymentPageId"
                :to="`/checkout`"
                variant="primary"
              >
                Check out
              </b-button>
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
      payMonthlyItemId: 1,
      modelPageId: 2,
      colorPageId: 3,
      tradeInSmartPhonePageId: 6,
      paymentPageId: 7,
      colorVariant: 'primary',
      colors: ['#5F85DB', '#621055', '#343a40', '#f8f9fa', '#dc3545'],
      selected: this.$store.state.selectedSpecs.find(
        (i) => i.parent_id === parseInt(this.$route.params.id)
      ),
      selectedTradeInStorage: this.$store.state.selectedSpecs.find(
        (item) => item.id === 23
      )
        ? this.$store.state.tradeInStorages.find((i) =>
            this.$store.getters.tradeInSmartphoneStorages.find(
              (j) => j.parent_id === i.parent_id
            )
          )
        : {},
    }
  },
  computed: {
    information() {
      return this.$store.state.informations.find((info) => info.id === this.id)
    },
    cardTitles() {
      return this.$store.state.informations
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
    selectedSpec() {
      return this.$store.state.selectedSpecs
    },
    relatedModels() {
      return this.$store.getters.standardModels
    },
    tradeInSmartphoneStorages() {
      return this.$store.getters.tradeInSmartphoneStorages
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
    totalPrice() {
      return this.$store.state.price
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
  padding: 10px 0 10px 10px;
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