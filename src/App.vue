<script setup>
import Welcome from './components/Welcome.vue'
import HomepageContent from './components/HomepageContent.vue'
</script>

<template>
  <div class="col-container">
    <div class="wrapper">
      <Welcome />
    </div>
  <div class="line"/>

  <main>
    <div class="homepagecontent">
      <HomepageContent />
    </div>
  </main>
  </div>
  <footer>
    <div class="wrapper">
      <p>© 2022 Jonas Lien Sampaio Da Silva</p>
    </div>
  </footer>
</template>

<style>
@import './assets/base.css';

#app {
  padding-top: 7rem;
  font-weight: normal;
}

.col-container {
  width: 100%;
  padding: 3rem;

  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
}

.homepagecontent {
  margin-top: 2rem;
}

footer .wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 1rem;
  gap: 0.8rem;
  opacity: 50%;
}

.line {
  width: 0.07rem;
  height: 20rem;
  background-color: hsla(217, 46%, 77%, 0.555);
  margin: 0 auto;
  margin-left: 3rem;
  margin-right: 3rem;
  transition: opacity 1s;
}

header {
  line-height: 1.5;
}

a,
.blue {
  text-decoration: none;
  color: rgb(0, 151, 189);
  transition: 0.4s;
}

@media (hover: hover) {
  a:hover {
    color: rgb(30, 194, 235);
  }
}

@media (max-width: 768px) {
  .col-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }

  .line {
    width: 80%;
    min-width: 18rem;
    height: 0.05rem;
    margin: 2rem;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 0;
    opacity: 50%;
    transition: opacity 1s;
  }
}

@media (max-height: 600px) {
  .homepagecontent {
    margin-top: 0;
    transition: 1.1s;
  }

  .col-container {
    padding: 0;
    transition: 0.9s;
  }
}
</style>
