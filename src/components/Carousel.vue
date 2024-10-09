<script setup>
import calculator from '../assets/images/calculatorjs.png'
import pralCalc from '../assets/images/pral-calc-aliment-search - Copie.png'
const projects = [
  {
    name: 'Age Calculator',
    technologies: 'HTML, CSS, JavaScript',
    objectif: 'Le but est de réaliser un calculateur qui affiche l\'âge de l\'utilisateur en années, mois et jours, sans contraintes de style',
    image: calculator,
    alt: `capture d\'écran du projet ${name}`,
    title: `capture d\'écran du projet ${name}`,
  },
  {
    name: 'Pral Calc',
    technologies: 'JavaScript, PHP. Framework Symfony, librairies React, Redux et MUI',
    objectif: 'Pral Calc est un projet en cours de développement. Cette application web est destinée aux utilisateurs souhaitant surveiller l\'équilibre acido-basique de leur alimentation. Elle offre la possibilité de rechercher l\'indice PRAL des aliments présents dans sa base de données, ainsi que de consigner les aliments consommés avec leur indice PRAL correspondant. En plus de ce mode d\'utilisation individuel, une fonctionnalité de partage de recettes permettra aux utilisateurs de tirer parti des expériences d\'autres membres et d\'échanger des idées, ouvrant ainsi toujours plus leurs propres horizons culinaires.',
    image: pralCalc,
  }
]

</script>²
<template>

  <div>
    <!--CAROUSEL INDICATORS-->
    <div id="carouselIndicators" class="carousel slide">
      <!--INNER-->
      <div class="carousel-inner">
        <div v-for="(project, index) in projects"
             :key="index"
             :class="['carousel-item', { active: index === 0 }]">
          <h3 class="project-title">Projet "{{project.name}}"</h3>
          <p class="project-description">{{project.objectif}}</p>
          <p class="project-technologies">Technologies utilisées : {{project.technologies}}</p>
          <div class="carousel-item__image-container d-flex justify-content-center">
            <img v-bind:src="project.image"
                 :alt="project.alt"
                 class="d-block"
                 :title="project.title"
            />
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</template>

<style scoped>
</style>