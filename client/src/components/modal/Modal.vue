<template>
  <div>
    {{image}}
    {{name}}
    {{content}}
  </div>
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

</style>