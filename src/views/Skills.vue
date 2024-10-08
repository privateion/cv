<script setup>
  import {onMounted} from "vue";

  //délimiter le viewport
  function isInViewport(element) {
  var rect = element.getBoundingClientRect();
  return (
  rect.top >= 0 &&
  rect.left >= 0 &&
  rect.bottom <=
  (window.innerHeight || document.documentElement.clientHeight) &&
  rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}
  //animer les bars
  function updateProgressBar() {
  const progressBars = document.querySelectorAll(".progress");
  const progressValues = [70, 60, 50, 50, 30, 30, 40];

  for (let i = 0; i < progressBars.length; i++) {
  const progressBar = progressBars[i];
  if (isInViewport(progressBar)) {
  progressBar.classList.add("visible");
  progressBar.style.width = `${progressValues[i]}%`;
}
}
}

  onMounted(() => {
  updateProgressBar();
});
import Skills from '../components/Skills.vue';
</script>

<template>
  <Skills/>
</template>