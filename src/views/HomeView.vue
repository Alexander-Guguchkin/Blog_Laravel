<script>
import HomeTop from '@/components/HomeTop.vue'
import HomeCenter from '@/components/HomeCenter.vue'
export default {
  name: 'HomeView',
  components: {
    HomeTop,
    HomeCenter
  }
}
</script>
<template>
  <div class="wraper">
    <HomeTop />
  </div>
  <HomeCenter />
  <div class="wraper"></div>
</template>
<style scoped>
.wraper {
  margin: 0 auto;
  width: 1200px;
}
</style>
