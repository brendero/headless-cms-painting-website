<template>
  <div class="image-grid">
    <GridItem v-for="painting in paintings" v-bind:key="painting.name" :item="painting"/>
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
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p253.jpeg", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at facilisis ligula, sagittis finibus felis. Aenean aliquet egestas magna ut volutpat. Duis id nulla sagittis, imperdiet purus nec, tincidunt orci. Duis non elit ipsum. Aenean et porta nibh. Suspendisse dictum eros in nisl aliquet, vitae molestie orci sollicitudin. In sed rhoncus libero, eget feugiat lacus. Duis mollis egestas est et fringilla. Sed dignissim sodales leo eu laoreet. Nulla molestie ullamcorper velit at porttitor. Aenean porttitor hendrerit tempus. Curabitur ut condimentum nulla, nec aliquet ligula. Maecenas convallis quam nec eros vehicula, at pharetra dui ornare. Ut elementum, justo ac convallis vulputate, nibh ex ornare"},
        {name: '2nd', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p267.jpeg", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at facilisis ligula, sagittis finibus felis. Aenean aliquet egestas magna ut volutpat. Duis id nulla sagittis, imperdiet purus nec, tincidunt orci. Duis non elit ipsum. Aenean et porta nibh. Suspendisse dictum eros in nisl aliquet, vitae molestie orci sollicitudin. In sed rhoncus libero, eget feugiat lacus. Duis mollis egestas est et fringilla. Sed dignissim sodales leo eu laoreet. Nulla molestie ullamcorper velit at porttitor. Aenean porttitor hendrerit tempus. Curabitur ut condimentum nulla, nec aliquet ligula. Maecenas convallis quam nec eros vehicula, at pharetra dui ornare. Ut elementum, justo ac convallis vulputate, nibh ex ornare "},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p254.jpeg", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at facilisis ligula, sagittis finibus felis. Aenean aliquet egestas magna ut volutpat. Duis id nulla sagittis, imperdiet purus nec, tincidunt orci. Duis non elit ipsum. Aenean et porta nibh. Suspendisse dictum eros in nisl aliquet, vitae molestie orci sollicitudin. In sed rhoncus libero, eget feugiat lacus. Duis mollis egestas est et fringilla. Sed dignissim sodales leo eu laoreet. Nulla molestie ullamcorper velit at porttitor. Aenean porttitor hendrerit tempus. Curabitur ut condimentum nulla, nec aliquet ligula. Maecenas convallis quam nec eros vehicula, at pharetra dui ornare. Ut elementum, justo ac convallis vulputate, nibh ex ornare "},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p218.png", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at facilisis ligula, sagittis finibus felis. Aenean aliquet egestas magna ut volutpat. Duis id nulla sagittis, imperdiet purus nec, tincidunt orci. Duis non elit ipsum. Aenean et porta nibh. Suspendisse dictum eros in nisl aliquet, vitae molestie orci sollicitudin. In sed rhoncus libero, eget feugiat lacus. Duis mollis egestas est et fringilla. Sed dignissim sodales leo eu laoreet. Nulla molestie ullamcorper velit at porttitor. Aenean porttitor hendrerit tempus. Curabitur ut condimentum nulla, nec aliquet ligula. Maecenas convallis quam nec eros vehicula, at pharetra dui ornare. Ut elementum, justo ac convallis vulputate, nibh ex ornare "},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p223.png", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at facilisis ligula, sagittis finibus felis. Aenean aliquet egestas magna ut volutpat. Duis id nulla sagittis, imperdiet purus nec, tincidunt orci. Duis non elit ipsum. Aenean et porta nibh. Suspendisse dictum eros in nisl aliquet, vitae molestie orci sollicitudin. In sed rhoncus libero, eget feugiat lacus. Duis mollis egestas est et fringilla. Sed dignissim sodales leo eu laoreet. Nulla molestie ullamcorper velit at porttitor. Aenean porttitor hendrerit tempus. Curabitur ut condimentum nulla, nec aliquet ligula. Maecenas convallis quam nec eros vehicula, at pharetra dui ornare. Ut elementum, justo ac convallis vulputate, nibh ex ornare "},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p225.png", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at facilisis ligula, sagittis finibus felis. Aenean aliquet egestas magna ut volutpat. Duis id nulla sagittis, imperdiet purus nec, tincidunt orci. Duis non elit ipsum. Aenean et porta nibh. Suspendisse dictum eros in nisl aliquet, vitae molestie orci sollicitudin. In sed rhoncus libero, eget feugiat lacus. Duis mollis egestas est et fringilla. Sed dignissim sodales leo eu laoreet. Nulla molestie ullamcorper velit at porttitor. Aenean porttitor hendrerit tempus. Curabitur ut condimentum nulla, nec aliquet ligula. Maecenas convallis quam nec eros vehicula, at pharetra dui ornare. Ut elementum, justo ac convallis vulputate, nibh ex ornare "},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p256.jpeg", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at facilisis ligula, sagittis finibus felis. Aenean aliquet egestas magna ut volutpat. Duis id nulla sagittis, imperdiet purus nec, tincidunt orci. Duis non elit ipsum. Aenean et porta nibh. Suspendisse dictum eros in nisl aliquet, vitae molestie orci sollicitudin. In sed rhoncus libero, eget feugiat lacus. Duis mollis egestas est et fringilla. Sed dignissim sodales leo eu laoreet. Nulla molestie ullamcorper velit at porttitor. Aenean porttitor hendrerit tempus. Curabitur ut condimentum nulla, nec aliquet ligula. Maecenas convallis quam nec eros vehicula, at pharetra dui ornare. Ut elementum, justo ac convallis vulputate, nibh ex ornare "},
        {name: '1st', image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p257.jpeg", content: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus at facilisis ligula, sagittis finibus felis. Aenean aliquet egestas magna ut volutpat. Duis id nulla sagittis, imperdiet purus nec, tincidunt orci. Duis non elit ipsum. Aenean et porta nibh. Suspendisse dictum eros in nisl aliquet, vitae molestie orci sollicitudin. In sed rhoncus libero, eget feugiat lacus. Duis mollis egestas est et fringilla. Sed dignissim sodales leo eu laoreet. Nulla molestie ullamcorper velit at porttitor. Aenean porttitor hendrerit tempus. Curabitur ut condimentum nulla, nec aliquet ligula. Maecenas convallis quam nec eros vehicula, at pharetra dui ornare. Ut elementum, justo ac convallis vulputate, nibh ex ornare "}
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
@media only screen and (max-width: 700px) {
  .image-grid {
    grid-template-columns: auto;
    width: 95%;
    margin: auto;
  }
}
</style>