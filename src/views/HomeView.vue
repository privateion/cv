<script setup>
    import Presentation from '../components/Presentation.vue';
        import { onMounted } from 'vue';
        onMounted(() => {
            const anim = document.querySelector(".animation");
            const splitText = anim.textContent.split("");
            anim.innerHTML = "";
            let i = 0;
            setInterval(function () {
            lettreSupp();
            }, 60);
            function lettreSupp() {
            if (i < splitText.length) {
                anim.innerHTML += splitText[i];
                i++;
            }
            }
        })
</script>


<template>
    <Presentation></Presentation>
</template>
