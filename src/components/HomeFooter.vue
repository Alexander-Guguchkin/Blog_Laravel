<script>
export default {
  name: 'HomeFooter'
}
</script>

<template>
  <div class="homeFooter">
    <div class="homeFooter__title">Featured works</div>
    <div class="works__сards">
      <div class="works__card">
        <div class="works__cardImage"><img src="../assets/image/Rectangle%2030.png" /></div>
        <div class="works__cardContent">
          <h2 class="works__cardTitle">Design Dashboards</h2>
          <div class="works__cardDate">
            <span class="date">2020</span><span class="textDate">Dashboard</span>
          </div>
          <div class="works__cartText">
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
            consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.homeFooter {
  padding: 36px;
}
.homeFooter__title {
  margin-bottom: 16px;
}
.works__card {
  display: flex;
  padding-bottom: 14px;
  border-bottom: 1px solid #e0e0e0;
}
.works__cardContent {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}
.works__cardImage {
  margin-right: 19px;
}
.works__cardTitle {
  margin-top: 0;
  flex-grow: 1;
}
.works__cardDate {
  display: flex;
  align-items: center;
  flex-grow: 1;
  margin-bottom: 19px;
}
.works__cardDate span {
  margin: 0 20px 0 0;
}
.date {
  background: #142850;
  color: white;
  padding: 6px 19px;
  border-radius: 24px;
}
.textDate {
  color: #8695a4;
}
.works__cartText {
  flex-grow: 2;
  width: 594px;
  font-size: 18px;
}
</style>
