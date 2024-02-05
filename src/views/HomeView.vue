<script>
import HomeTop from '@/components/HomeTop.vue'
import HomeCenter from '@/components/HomeCenter.vue'
import HomeFooter from '@/components/HomeFooter.vue'
import Footer from '@/components/Footer.vue'
export default {
  name: 'HomeView',
  components: {
    HomeTop,
    HomeCenter,
    HomeFooter,
    Footer
  }
}
</script>
<template>
  <div class="wraper">
    <HomeTop />
  </div>
  <HomeCenter />
  <div class="wraper">
    <HomeFooter />
    <Footer />
  </div>
</template>
<style scoped>
.wraper {
  margin: 0 auto;
  width: 1200px;
}
</style>
