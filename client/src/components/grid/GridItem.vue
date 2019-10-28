<template>
    <div>
    <figure class="grid-item" v-on:click="showModal = true">
      <img :src="item.image"/>
    </figure>
    <Modal v-if="showModal" v-on:close="showModal = false" :image="item.image" :name="item.name" :content="item.content"/>
    </div>
</template>

<script>
import Modal from '../modal/Modal.vue';

export default {
  name: 'GridItem',
  components: {
    Modal
  },
  props: {
    item: Object
  },
  data: () => {
    return {
      showModal: false
    }
  }
}
</script>

<style>
.grid-item {
  margin: 0;
}
.grid-item:hover {
  cursor: pointer;
}
.grid-item > img {
  width: 100%;
  height: auto;
  object-fit: cover;
}
</style>