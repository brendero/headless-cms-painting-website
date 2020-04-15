<template>
  <div class="content-wrapper">
  <div>
    <h1>Contact</h1>
    <form className="contact-form" action="https://formspree.io/roeckiekoen@gmail.com" method="post">
      <input type="hidden" name="_subject" value="Mail from Portfolio website"/>
      <input type="text" name="name" placeholder="Name" required={true}/>
      <input type="email" name="_replyto" placeholder="E-mail" required={true} />
      <textarea name="message" cols={20} placeholder="Message" required={true}></textarea>
      <button type="submit" className="submit-btn">Send mail</button>
    </form>
  </div>
  <div v-html="pageContent">
  </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'Contact',
  data: () => {
    return {
      pageContent: null
    }
  },
  mounted() {
    axios.get(`${process.env.VUE_APP_API_URL}/pages/31`, {})
      .then(({data}) => {
        this.pageContent = data.content.rendered
      })
  }
}
</script>

<style>
  body {
    font-family: "Roboto";
  } 
  h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
  }
  .content-wrapper {
    margin: 10% 10%;
  }
  .contact-form {
    
  }
</style>