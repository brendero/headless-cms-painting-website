<template>
  <nav class="main-nav">
    <ul>
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
  name: 'Navigation'
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
</style>