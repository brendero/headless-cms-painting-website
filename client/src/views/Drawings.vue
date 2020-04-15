<template>
  <div class="image-grid">
    <GridItem v-for="drawing in drawings" v-bind:key="drawing.name" :item="drawing"/>
  </div>
</template>

<script>
import axios from 'axios';
import GridItem from '../components/grid/GridItem.vue'

export default {
  name: 'Drawings',
  components: {
    GridItem
  },
  data: () => {
    return {
      drawings: null
    }
  },
  mounted() {
      axios.get(`${process.env.VUE_APP_API_URL}/rest_drawings`, {})
      .then(({data}) => {
        this.drawings = 
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
