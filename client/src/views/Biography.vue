<template>
  <div class="content-wrapper" v-html="pageContent">
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Biography',
  data: () => {
    return {
      pageContent: null
    }
  },
  mounted() {
    axios.get(`${process.env.VUE_APP_API_URL}/pages/17`, {})
    .then(({data}) => {
      this.pageContent = data.content.rendered
    })
  }
}
</script>

<style>
body {
  font-family: "Roboto";
} 
h1,h2,h3,h4,h5,h6 {
  font-family: "Playfair Display";
}
.content-wrapper {
  margin: 10% 10%;
}
</style>