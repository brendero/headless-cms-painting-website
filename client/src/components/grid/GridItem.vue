<template>
    <div >
    <div v-bind:class="{ skeleton: loading}"/>
    <figure class="grid-item" v-on:click="showModal = true" v-if="!loading">
      <img :src="renderedImage"/>
    </figure>
    <Modal v-if="showModal && !loading" v-on:close="showModal = false" :image="renderedImage" :name="item.name" :content="item.content"/>
    </div>
</template>

<script>
import axios from 'axios';
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
      showModal: false,
      renderedImage: null,
      loading: true
    }
  },
  mounted() {
    axios
      .get(`${process.env.VUE_APP_API_URL}/media/${this.item.image}`)
      .then(({data}) => this.renderedImage = data.guid.rendered)
      .finally(() => this.loading = false)
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
.grid-item > img:hover {
  opacity: 0.7;
}
.skeleton {
  background: linear-gradient(-45deg, rgba(211, 211, 211, 1), rgba(211, 211, 211, 0.2));
	background-size: 400% 400%;
  height: 400px;
  width: 100%;
	animation: gradient 1.5s ease infinite;
}
@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
</style>