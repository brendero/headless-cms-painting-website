<template>
  <div class="image-grid">
    <GridItem v-for="painting in paintings" v-bind:key="painting.id" :item="painting"/>
  </div>
</template>

<script>
import axios from 'axios';
import GridItem from '../components/grid/GridItem.vue';

export default {
  name: 'Paintings',
  components: {
    GridItem
  },
  data: () => {
    return {
      paintings: null
    }
  },
  mounted() {
    axios.get(`${process.env.VUE_APP_API_URL}/rest_paintings?per_page=100`, {})
      .then(({data}) => {
        this.paintings = 
              data.map(painting => ({
                id: painting.id,
                name: painting.title.rendered,
                content: painting.content.rendered,
                image: painting.featured_media
              }))
      })
  }
}
</script>

<style>
.image-grid {
  margin: 0 2%;
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 20px;
  width: 96%;
}
@media only screen and (max-width: 700px) {
  .image-grid {
    grid-template-columns: auto;
    width: 95%;
    margin: auto;
  }
}
</style>