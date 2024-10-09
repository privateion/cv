import './style/components/animated-presentation.scss'
import './style/components/buttons.scss'
import './style/components/carousel.scss'
import './style/components/contact.scss'
import './style/components/experiences.scss'
import './style/components/formation.scss'
import './style/components/lists.scss'
import './style/components/navbar.scss'
import './style/components/progressbars.scss'
import './style/components/skills.scss'
import './style/layout/base.scss'
import './style/layout/footer.scss'
import './style/layout/header.scss'
import './style/pages/presentation.scss'


import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

//définition du point d'entrée
const app = createApp(App)
app.use(router)
app.mount('#app')

const headerNav = document.querySelector(".header__nav");
const openBtn = document.querySelector(".header__open-btn");
const closeBtn = document.querySelector(".header__close-btn");
const headerLink = document.querySelectorAll(".header__link");

const openNav = () => {
    headerNav.classList.add("active");
    openBtn.classList.add("invisible")
}

const closeNav = () => {
    headerNav.classList.remove("active");
    openBtn.classList.remove("invisible")
}

closeBtn.onclick = closeNav;
openBtn.onclick = openNav;
headerLink.forEach(link => {
        link.addEventListener('click', closeNav);
    }

)


