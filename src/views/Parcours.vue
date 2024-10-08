<template>
    <Formation></Formation>
    <Experience></Experience>
</template>

<script>
    import Parcours from "@/components/Parcours.vue";
    import Formation from "@/components/Formation.vue";
    import Experience from "@/components/Experience.vue";
    import {defineComponent} from "vue";
    export default defineComponent({
      components: {Experience, Formation, Parcours}
    })


    export const showComponent = (component) => {
      this.currentComponent = component
    }
</script>