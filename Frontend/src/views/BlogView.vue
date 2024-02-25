<script>
import Blog from '@/components/Blog.vue'
import { RouterLink } from 'vue-router';
export default {
  name: 'BlogView',
  components: { Blog, RouterLink }
}
</script>
<template>
  <RouterLink to="/blogPost">
        
  </RouterLink>
  <Blog />
</template>
<style scoped></style>
