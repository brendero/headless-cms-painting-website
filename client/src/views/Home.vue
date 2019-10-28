<template>
  <div>
    <div class="homepage-header">
      <div class="header-text">
        <p class="text-main">Koen De Roeck</p>
        <hr class="text-divider">
        <h1 class="text-secondary">Kunstenaar</h1>
      </div>
      <img class="header-image" :src="image"/>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Home',
  data: () => {
    return {
      image: "https://koenderoeck.weebly.com/uploads/1/0/9/8/109819924/p253.jpeg"
    }
  }
}
</script>

<style>
  .homepage-header {
    background: black;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
  }
  .header-text {
    text-align: center;
  }
  .text-main {
    color: #166FE3;
    font-family: "Open Sans";
    font-weight: 300
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
    width: 15%;
    justify-self: center;
  }
</style>