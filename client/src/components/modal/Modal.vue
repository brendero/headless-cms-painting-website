<template>
  <transition name="modal">
    <div class="modal-mask">
      <a id="menu-toggle" class="close" v-on:click="$emit('close')">
        Close
      </a>
        <div class="modal-content">
          <div class="modal-image">
            <img :src="image">
          </div>
          <div class="modal-text">
            <h1>{{ name }}</h1>
            <p>{{ content }}</p>
          </div>
        </div>
    </div>
  </transition>
</template>

<script>
export default {
  name: 'Modal',
  props: {
    image: String,
    name: String,
    content: String
  }
}
</script>

<style>
  .modal-mask {
    position: fixed;
    z-index: 2;
    top: 0%;
    left: 0%;
    width: 100%;
    box-sizing: border-box;
    padding: 2% 4%;
    height: 100%;
    background: white;
  }
  .modal-content {
    display: flex;
    width: 100%;
    margin-top: 3%;
  }
  .modal-image {
    width: 35%;
  }
  .modal-image > img {
    width: 100%;
  }
  .modal-text {
    margin-left: 50px;
    width: 65%;
  }
  .modal-text > h1 {
    font-family: "Playfair Display";
  }
  .modal-text > p {
    font-family: "Open Sans";
  }
  .close {
    opacity: 0.3;
    position: relative;
    font-family: "Open Sans";
  }
  .close:hover {
    opacity: 1;
    cursor: pointer;
  }
  .close:before, .close:after {
    position: absolute;
    left: -20px;
    top: -5px; 
    content: ' ';
    height: 33px;
    width: 2px;
    background-color: #333;
  }
  .close:before {
    transform: rotate(45deg);
  }
  .close:after {
    transform: rotate(-45deg);
  }
  @media only screen and (max-width: 700px) {
    .modal-mask {
      padding: 7%;
    }
    .close {
      margin-left: 8vw;
    }
    .modal-content {
      flex-direction: column;
      overflow: scroll;
      height: 90vh;
    }
    .modal-image {
      width: 100%;
    }
    .modal-text {
      width: 100%;
      margin: 0;
    }
  }
</style>