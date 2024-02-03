<script setup>
import { RouterView } from 'vue-router'

import Header from '@/components/Header.vue'
</script>
<template>
  <header>
    <Header />
  </header>
  <main>
    <RouterView />
  </main>
</template>
<style scoped>
.header {
  display: flex;
  justify-content: end;
}
</style>
