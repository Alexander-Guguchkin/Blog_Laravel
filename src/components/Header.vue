<script>
import { RouterLink } from 'vue-router'
export default {
  name: "Header"
}
</script>

<template>
<div class="header">
  <div class="nav">
    <RouterLink to="/works">Works</RouterLink>
    <RouterLink to="/blog">Blog</RouterLink>
    <RouterLink to="/contact">Contact</RouterLink>
  </div>
</div>
</template>

<style scoped>
a{
  color: black;
  text-decoration: none;
}
</style>