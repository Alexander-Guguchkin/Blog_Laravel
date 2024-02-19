<script>
export default {
  name: 'Blog'
}
</script>
<template>
  <div class="blog">
    <h1 class="blog__title">Blog</h1>
    <div class="blog__cards">
      <div class="blog__card">
        <h2 class="blog__cardTitle">UI Interactions of the week</h2>
        <div class="blog__cardDate">
          <span class="date">12 Feb 2019</span><span>|</span><span class="text">Express, HandleBars</span>
        </div>
        <div class="blog__cardText">
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
          consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
        </div>
      </div>
    </div>
  </div>
</template>
<style scoped>
.blog{
  margin: 0 auto;
  width: 681px;
}
.blog__cards{
  display: flex;
  justify-content: center;

}
.blog__card{
  display: flex;
  justify-content: space-between;
  flex-direction: column;
}
.blog__cardTitle{
  margin: 10px 0;
}

.blog__cardText{
  padding: 10px 0 20px 0;
  border-bottom: 1px solid #E0E0E0;
}
</style>
