<script>
import Works from '@/components/Works.vue'
export default {
  name: 'WorksView',
  components: {
    Works
  }
}
</script>
<template>
  <Works />
</template>
<style scoped>
.works{
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
</style>
