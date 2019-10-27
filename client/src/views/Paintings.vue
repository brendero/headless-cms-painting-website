<template>
  <div class="image-grid">
    <GridItem v-for="painting in paintings" v-bind:key="painting.name" :image="painting.image"/>
  </div>
</template>

<script>
import GridItem from '../components/grid/GridItem.vue'

export default {
  name: 'Paintings',
  components: {
    GridItem
  },
  data: function () {
    return {
      // TODO: replace dummy data with real data
      paintings: [
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p253.jpeg", content: "this is the text enazu"},
        {name: '2nd', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p267.jpeg", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p254.jpeg", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p218.png", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p223.png", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p225.png", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p256.jpeg", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p257.jpeg", content: "this is the text enazu"}
      ]
    }
  }
}
</script>

<style>
.image-grid {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 20px;
  width: 100%;
}
</style>