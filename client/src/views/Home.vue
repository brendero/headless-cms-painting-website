<template>
  <div>
    <div class="homepage-header">
      <div class="header-text">
        <p class="text-main">Koen De Roeck</p>
        <hr class="text-divider">
      </div>
      <img class="header-image" :src="image"/>
    </div>
  </div>
</template>

<script>
const homeImage = require("../assets/img/FullSizeRender.jpeg");

export default {
  name: 'Home',
  data: () => {
    return {
      image: homeImage
    }
  }
}
</script>

<style>
  .homepage-header {
    background: black;
    box-shadow: -2px 23px 32px rgba(0,0,0,0.3);
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
  }
  .header-text {
    margin-top: 4vw;
    text-align: center;
  }
  .text-main {
    color: #166FE3;
    font-family: "Roboto";
    font-weight: 300;
    font-size: 1.5vw;
  }
  .text-divider {
    background: white;
    width: 20%;
  }
  .text-secondary {
    color: white;
    font-family: "Playfair Display";
    font-size: 4vw;
    margin: 0;
  }
  .header-image {
    width: 18%;
    justify-self: center;
    position: relative;
    top: 6vw;
  }
  @media only screen and (max-width: 700px) {
    .text-main {
      font-size: 6vw;
    }
    .text-secondary {
      font-size: 15vw;
    }
    .header-image {
      width: 90%;
    }
  }
</style>