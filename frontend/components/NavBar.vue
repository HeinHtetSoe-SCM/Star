<template>
  <div class="container">
    <b-container fluid>
      <b-row fluid>
        <b-col>
          <nuxt-link :to="{name: 'index'}">
            <h1 class="title">Star</h1>
          </nuxt-link>
        </b-col>
        <b-col class="clearfix">
          <b-nav pills class="nav">
            <b-nav-item>
              <nuxt-link :to="`/specs/versions`">Specs</nuxt-link>
            </b-nav-item>
            <b-nav-item>About Us</b-nav-item>
            <b-nav-item active :to="`/versions`">Buy</b-nav-item>
          </b-nav>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
export default {

}
</script>

<style>
  .clearfix {
    clear: both;
    content: '';
    display: table;
  }
  .title {
    text-align: left;
  }
  .nav {
    float: right;
  }
  .container {
    margin-top: 5px;
  }
</style>