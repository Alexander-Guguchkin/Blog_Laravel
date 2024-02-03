<script>
export default {
  name: 'HomeTop'
}
</script>

<template>
  <div class="homeTop">
    <div class="homeTop__section1">
      <h1 class="homeTop__title">Hi, I am John, Creative Technologist</h1>
      <div class="homeTop__about">
        Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia
        consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.
      </div>
      <div class="homeTop__button">
        <button>Download Resume</button>
      </div>
    </div>
    <div class="homeTop__section2">
      <div class="homeTop__image">
        <img src="../assets/logo.svg" width="242" height="242" />
      </div>
    </div>
  </div>
</template>

<style scoped>
.homeTop {
  display: flex;
  justify-content: space-around;
}
.homeTop__section1 {
  display: flex;
  flex-direction: column;
}
.homeTop__title {
  width: 299px;
}
.homeTop__about {
  width: 499px;
  margin-bottom: 46px;
  text-align: justify;
}
.homeTop__button button {
  background-color: #ff6464;
  border: none;
  padding: 10px 20px;
  color: white;
  cursor: pointer;
}
.homeTop__button button:active {
  background-color: #af4646;
}
</style>
