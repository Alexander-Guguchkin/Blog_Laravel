<script>
import { RouterLink } from 'vue-router'
export default {
  name: 'Header'
}
</script>

<template>
  <div class="header">
    <div class="nav">
      <RouterLink to="/">Home</RouterLink>
      <RouterLink to="/works">Works</RouterLink>
      <RouterLink to="/blog">Blog</RouterLink>
      <RouterLink to="/contact">Contact</RouterLink>
    </div>
  </div>
</template>

<style scoped>
.header {
  margin-bottom: 42px;
}
a {
  color: black;
  text-decoration: none;
}
.nav {
  display: flex;
  justify-content: space-around;
  flex-grow: 0.16;
}
</style>
