<script>
import { RouterLink } from 'vue-router'
export default {
  name: 'HomeCenter',
  components: {
    RouterLink
  }
}
</script>

<template>
  <div class="homeCenter">
    <div class="wraper">
      <div class="homeCenter__header">
        <div class="homeCenter__title">Recent posts</div>
        <div class="homeCenter__link">
          <RouterLink to="/Blog">View All</RouterLink>
        </div>
      </div>
      <div class="homeCenter__main">
        <div class="homeCenter__cart">
          <h2 class="homeCenter__cartTitle">Making a design system from scratch</h2>
          <div class="homeCenter__cartDate">
            <span>12 Feb 2020</span>
            <span>|</span>
            <span>Design, Pattern</span>
          </div>
          <div class="homeCenter__cartContent">
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
            consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.homeCenter {
  background: #edf7fa;
  padding: 36px;
}
.wraper {
  margin: 0 auto;
  width: 974px;
}
.homeCenter__header {
  display: flex;
  justify-content: space-between;
  margin-bottom: 16px;
}
.homeCenter__header a{
    color: #00A8CC;
    text-decoration: none;
}
.homeCenter__cart {
  display: flex;
  flex-direction: column;
  width: 319px;
  background-color: white;
  padding: 21px;
}
.homeCenter__cartTitle{
    width: 369px;
}
.homeCenter__cartDate {
  display: flex;
  justify-content: space-between;
  width: 214px;
  margin-bottom: 20px;
}
.homeCenter__cartContent{
    width: 299px;
}
</style>
