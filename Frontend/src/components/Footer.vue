<script>
import { RouterLink } from 'vue-router'
export default {
  name: 'Footer'
}
</script>

<template>
  <div class="footer">
    <div class="footer footer__link">
      <RouterLink to=""><img src="../assets/fb.svg" /></RouterLink>
      <RouterLink to=""><img src="../assets/insta.svg" /></RouterLink>
      <RouterLink to=""><img src="../assets/Group.svg" /></RouterLink>
      <RouterLink to=""><img src="../assets/Linkedin%20(1).svg" /></RouterLink>
    </div>
    <div class="footer footer__text">Copyright ©2020 All rights reserved</div>
  </div>
</template>

<style scoped>
.footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-direction: column;
}
.footer__link {
  width: 316px;
  flex-direction: row;
  justify-content: space-between;
  margin: 26px 0;
}
</style>
