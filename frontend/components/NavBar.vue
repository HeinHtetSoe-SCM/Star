<template>
  <div class="container">
    <b-container fluid>
      <b-row fluid>
        <b-col>
          <nuxt-link :to="{ name: 'index' }">
            <h1 class="title">&#9733; Star</h1>
          </nuxt-link>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {}
</script>

<style scoped>
.title {
  color: white;
  text-align: left;
  font-size: 24px;
}
.container {
  margin-top: 0px;
  background-color: #06283d;
}
</style>