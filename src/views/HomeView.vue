<script>
import HomeTop from '@/components/HomeTop.vue'
import HomeCenter from '@/components/HomeCenter.vue'
import Works from '@/components/Works.vue'
export default {
  name: 'HomeView',
  components: {
    Works,
    HomeTop,
    HomeCenter,
  }
}
</script>
<template>
  <div class="wraper">
    <HomeTop />
  </div>
  <HomeCenter />
  <div class="wraper">
    <div class="homeFooter">
      <div class="homeFooter__title">Featured works</div>
      <Works />
    </div>

  </div>
</template>
<style scoped>
.wraper {
  margin: 0 auto;
  width: 1200px;
}
.homeFooter {
  padding: 36px 0;
}
.homeFooter__title {
  margin-bottom: 16px;
}
</style>
