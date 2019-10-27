<template>
  <nav class="main-nav">
    <div class="mobile mobile-toggle">
      <a id="menu-toggle" class="button" v-bind:class="{ toggled: menuToggled }" v-on:click="menuToggled = !menuToggled">
          <span class="sr">Toggle Navigation</span>
          <span class="menu-bar bar1"></span>
          <span class="menu-bar bar2"></span>
          <span class="menu-bar bar3"></span>
      </a>
    </div>
    <ul v-if="menuToggled" class="mobile mobile-menu">
      <li>
        <router-link to="/" exact>Home</router-link>
      </li>
      <li>
        <router-link to="/paintings">Paintings</router-link>
      </li>
      <li>
        <router-link to="/drawings">Drawings</router-link>
      </li>
      <li>
        <router-link to="/biography">Biografie</router-link>
      </li>
      <li>
        <router-link to="/contact">Contact</router-link>
      </li>
    </ul>
    <ul class="main-menu">
      <li>
        <router-link to="/" exact>Home</router-link>
      </li>
      <li>
        <router-link to="/paintings">Paintings</router-link>
      </li>
      <li>
        <router-link to="/drawings">Drawings</router-link>
      </li>
      <li>
        <router-link to="/biography">Biografie</router-link>
      </li>
      <li>
        <router-link to="/contact">Contact</router-link>
      </li>
    </ul>
  </nav>
</template>

<script>
export default {
  name: 'Navigation',
  data: () => {
    return {
      menuToggled: false
    }
  }
}
</script>

<style>
  .main-nav {
    position: fixed;
    top: 0;
    width: 100%;
    background: white;
    display: flex;
    justify-content: center;
  }
  .mobile {
    display: none;
  }
  .main-nav > ul {
    display: flex;
    list-style: none;
    padding: 0;
  }
  .main-nav > ul > li {
    margin: 0 10px;
  }
  .main-nav > ul > li > a {
    display: block;
    padding: 5px 10px;
    text-decoration: none;
    color: black;
    font-family: "Open Sans";
    font-weight: bold;
    font-size: 12px;
  }
  .main-nav > ul > li > a:hover {
    border-bottom: 1px solid black;
  }
  .router-link-active {
    border-bottom: 1px solid black;
  }
  @media only screen and (max-width: 700px) {
    .main-nav {
      flex-direction: column;
    }
    .main-nav > .main-menu {
      display: none;
    }
    .mobile {
      display: block;
    }
    .main-nav > .mobile-menu {
      flex-direction: column;
      width: 100%;
      float: left;
    }
    .main-nav > .mobile-menu > li { 
      margin: 10px 10px;
    }
    .mobile-toggle {
      display: flex;
      width: 100%;
      float: left;
      justify-content: flex-end;
      padding: 35px 15px;
      border-bottom: 1px solid black;
      box-sizing: border-box;
    }

    /* Code for menu button */
    .button {
        display: block;
        position: fixed;
        z-index: 999;
        right: 3%;
        top: 2%;
        width: 40px;
        height: 40px;
        border-radius: 3px;
        margin: 0 auto;
        padding-top: 12px;
        transition: all 500ms cubic-bezier(1.000, 0.000, 0.645, 0.650);
      }
      
      .sr {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
      }
      
      .menu-bar {
        display: block;
        position: relative;
        background: black;
        width: 26px;
        height: 2px;
        border-radius: 1px;
        transition: all 300ms;
        margin: 0 auto;
      }
      
      .bar1 {
        top: 0;
        animation: topbar-back 500ms;
        animation-fill-mode: both;
        animation-play-state: initial !important;
      }
      
      .bar2 { opacity: 1; }
      
      .bar3 {
        bottom: 0;
        animation: bottombar-back 500ms;
        animation-fill-mode: both;
        animation-play-state: initial !important;
      }
      
      .menu-bar + .menu-bar {
        margin-top: 5px;
      }
      
      .toggled .bar1 {
        top: 10%;
        animation: topbar-x 500ms;
        animation-fill-mode: both;
        background: black;
      }
      
      .toggled .bar2 {
        opacity: 0;
        background: black;
      }
      
      .toggled .bar3 {
        bottom: 25%;
        animation: bottombar-x 500ms;
        animation-fill-mode: both;
        background: black;
      }
      
      @keyframes topbar-x {
        0% {
          top: 0;
          -webkit-transform: rotate(0deg);
        }
      
        45% {
          top: 25%;
          -webkit-transform: rotate(145deg);
        }
      
        75% {
          -webkit-transform: rotate(130deg);
        }
      
        100% {
          -webkit-transform: rotate(135deg);
        }
      }
      
      @keyframes topbar-back {
        0% {
          top: 25%;
          -webkit-transform: rotate(135deg);
        }
      
        45% {
          -webkit-transform: rotate(-10deg);
        }
      
        75% {
          -webkit-transform: rotate(5deg);
        }
      
        100% {
          top: 0;
          -webkit-transform: rotate(0);
        }
      }
      
      @keyframes bottombar-x {
        0% {
          bottom: 0;
          -webkit-transform: rotate(0deg);
        }
      
        45% {
          bottom: 25%;
          -webkit-transform: rotate(-145deg);
        }
      
        75% {
          -webkit-transform: rotate(-130deg);
        }
      
        100% {
          -webkit-transform: rotate(-135deg);
        }
      }
      
      @keyframes bottombar-back {
        0% {
          bottom: 25%;
          -webkit-transform: rotate(-135deg);
        }
      
        45% {
          -webkit-transform: rotate(10deg);
        }
      
        75% {
          -webkit-transform: rotate(-5deg);
        }
      
        100% {
          bottom: 0;
          -webkit-transform: rotate(0);
        }
      }
  }
</style>