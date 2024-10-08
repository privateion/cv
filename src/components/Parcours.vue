<template>
  <div>
    <button>Formation</button>
    <button>Expérience</button>
  </div>

  <Formation></Formation>
  <Experience></Experience>
</template>

<style scoped>

</style>

<script>

import Formation from "@/components/Formation.vue";
import Experience from "@/components/Experience.vue";

export default {
  name: 'Parcours',
  components: {Experience, Formation}
}
</script>