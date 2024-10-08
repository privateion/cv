
<template>
      <form class="contactForm" @submit=sendEmail>
        <div class="contactForm__text-input-wrapper">
          <fieldset class="p-4 contactForm__userInfos">
                <label for="lastname">Votre nom</label>
                <input id="lastname" type="text" placeholder="Saisissez votre nom" v-model="formData.lastname" required>
                <label for="firstname">Votre prénom</label>
                <input id="firstname" type="text" placeholder="Prénom" v-model="formData.firstname" required>
                <label for="mail">Votre adresse mail</label>
                <input type="email" placeholder="Saisissez votre adresse mail" v-model="formData.email" required>
                <label for="phone">Numéro de téléphone <span>(optionnel)</span></label>
                <input type="tel" placeholder="Saisissez votre numéro" v-model="formData.phone">
            </fieldset>
            <fieldset class="p-4 contactForm__userMessage">
                <label for="message">Votre message</label>
                <textarea name="message" id="message" cols="30" rows="8" v-model="formData.message" required></textarea>
            </fieldset>
          </div>
          <div class="contactForm__submit-input">
            <input type="submit">
          </div>

      </form>
</template>

<script>
import axios from 'axios';
const config = {
    headers: {
      "Content-Type": "application/json",
      "Accept": "application/json"
    }
  };

export default {
    name: 'ContactForm',
  data() {
    return {
      formData: {
        'lastname' :'',
        'firstname':'',
        'email':'',
        'message':'',
        'phone': ''
      }
    };
  },
  methods: {
    sendEmail(event) {
      event.preventDefault();
      axios.post('http://localhost:8080/index.php', this.formData, config)
           .then(response => {
            console.log(response.data)
            if (response.data.status === "success") {
              console.log('viens on reload')
            }
        })
        .catch(error => {
          console.error(error);
        });
    }
  }
}

  </script>
  