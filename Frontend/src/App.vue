<script setup>
import { RouterView } from 'vue-router'

import Header from '@/components/Header.vue'
import Footer from '@/components/Footer.vue'
</script>
<template>
  <header>
    <Header />
  </header>
  <main>
    <RouterView />
  </main>
  <footer>
    <Footer/>
  </footer>
</template>
<style scoped>
* {
  font-size: 16px;
}
.header {
  display: flex;
  justify-content: end;
}
</style>
