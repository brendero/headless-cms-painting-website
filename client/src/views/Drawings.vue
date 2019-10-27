<template>
  <div class="image-grid">
    <GridItem v-for="drawing in drawings" v-bind:key="drawing.name" :image="drawing.image"/>
  </div>
</template>

<script>
import GridItem from '../components/grid/GridItem.vue'

export default {
  name: 'Drawings',
  components: {
    GridItem
  },
  data: () => {
    return {
      // TODO: replace dummy data with real data
    drawings: [
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/img-0304_orig.jpg", content: "this is the text"},
        {name: '2nd', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/img-0308_orig.jpg", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/img-0309_orig.jpg", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/img-0299_orig.jpg", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/img-0305_orig.jpg", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/img-0295_orig.jpg", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/img-0301_orig.jpg", content: "this is the text enazu"},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/img-0303_orig.jpg", content: "this is the text enazu"}
      ]
    }
  }
}
</script>
