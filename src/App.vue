<script setup>
import { RouterLink, RouterView } from 'vue-router'
import AppFooter from './components/AppFooter.vue';
import AppHeader from "./components/AppHeader.vue";
</script>

<template>
  <AppHeader/>
  <main>
    <RouterView/>
  </main>
    <AppFooter/>
</template>