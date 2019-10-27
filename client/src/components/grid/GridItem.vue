<template>
    <figure class="grid-item" >
      <img :src="image"/>
    </figure>
</template>

<script>
export default {
  name: 'GridItem',
  props: {
    image: String
  }
}
</script>

<style>
.grid-item {
  margin: 0;
}
.grid-item > img {
  width: 100%;
  height: auto;
  object-fit: cover;
}
</style>