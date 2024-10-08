<script setup>
import { RouterLink, RouterView } from 'vue-router'
import AppFooter from './components/AppFooter.vue';
import AppHeader from "./components/AppHeader.vue";

window.onload = () => {
  Particles.init({
    selector: '.background'
  });
};
</script>

<template>
<AppHeader></AppHeader>
  
  <main>
    <RouterView />
  </main>

<footer>
  <AppFooter/>
</footer>
</template>