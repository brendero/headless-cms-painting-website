<template>
  <div id="app">
    <Navigation/>
    <main class="main-wrapper">
      <router-view></router-view>
    </main>
  </div>
</template>

<script>
import Navigation from './components/navigation/Navigation.vue'

export default {
  name: 'app',
  components: {
    Navigation
  }
}
</script>

<style>
@font-face {
  font-family: "Open Sans";
  src: url("./assets/fonts/Open_Sans/OpenSans-Bold.ttf");
  font-weight: bold;
}
@font-face {
  font-family: "Open Sans";
  src: url("./assets/fonts/Open_Sans/OpenSans-SemiBold.ttf");
  font-weight: 300;
}
@font-face {
  font-family: "Playfair Display";
  src: url("./assets/fonts/Playfair_Display/PlayfairDisplay-Regular.ttf");
  font-weight: 100;
}
@font-face {
  font-family: "Playfair Display";
  src: url("./assets/fonts/Playfair_Display/PlayfairDisplay-Bold.ttf");
  font-weight: bold;
}
body,
html {
  margin: 0;
  padding: 0;
}
#app {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}
.main-wrapper {
  margin: 0 2%;
  margin-top: 80px;
}
</style>
