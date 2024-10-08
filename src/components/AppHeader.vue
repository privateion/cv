<template>
  <header class="header">
    <img alt="logo" class="logo" src="../assets/images/android-chrome-512x512.png" width="125" height="125" />
    <div class="header__nav-container">
      <div class="header__nav">
        <a id="closeBtn" href="#" class="header__close-btn">Fermer</a>
        <RouterLink to="/" class="header__link">Home</RouterLink>
        <RouterLink to="/Parcours" class="header__link">Parcours</RouterLink>
        <RouterLink to="/Skills" class="header__link">Compétences</RouterLink>
        <RouterLink to="/Portfolio" class="header__link">Projets</RouterLink>
<!--        <RouterLink to="/Contact" class="header__link">Contact</RouterLink>-->
      </div>

      <a href="#" id="openBtn" class="header__open-btn">
        <div class="header__burger-menu">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </a>
    </div>
  </header>
</template>

<script>
import {RouterLink} from "vue-router";

export default {
    name: 'AppHeader',
  components: {RouterLink}
}
</script>