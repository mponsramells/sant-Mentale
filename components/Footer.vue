<template>
  <footer class="bg-linear">
    <Comments/>
    <div class="w-full flex flex-col text-center">
      <div class="grid grid-cols-5 w-[95%] gap-4 mx-auto pt-12">
        <div class="flex flex-col justify-between col-span-2">
          <h3 class="text-dark text-3xl font-semibold w-3/4">Aimerais-tu recevoir des ressources mensuelles d'IKI?</h3>
          <p class="text-dark text-sm my-2 w-3/4 text-start">Notre newsletter comprend des activités de détente, des lectures
            informatives ou récréatives lire à l'ombre d'un arbre au printemps ou avec une tasse de thé en hiver</p>
          <div class="flex mt-4 bg-white rounded p-2 w-3/4">
            <input type="email" placeholder="Saisis ton adresse e-mail" class="mr-2 p-2 flex-1 text-secondary">
            <button type="submit" class="bg-secondary uppercase text-white p-2 px-5 rounded-lg font-semibold ">S'abonner</button>
          </div>
        </div>
        <div class="flex flex-col text-start">
          <h3 class="text-dark font-bold mb-6">À propos</h3>
          <ul>
            <li><a href="#">Qui sommes-nous ?</a></li>
            <li><a href="#">Espace presse</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
        <div class="flex flex-col text-start">
          <h3 class="text-dark font-bold mb-6">Liens utiles</h3>
          <ul>
            <li><a href="#">Santé mentale des jeunes</a></li>
            <li><a href="#">S.O.S amitié France</a></li>
            <li><a href="#">Fil santé jeunes</a></li>
            <li><a href="#">Nightline France</a></li>
          </ul>
        </div>
        <div class="flex flex-col items-center justify-center">
          <img src="/logoHorizontalSecondary.png" alt="logo">
          <ul class="flex justify-between w-2/4 py-4">
            <li><img src="/instagram.png" alt=""></li>
            <li><img src="/facebook.png" alt=""></li>
            <li><img src="/youtube.png" alt=""></li>
            <li><img src="/x.png" alt=""></li>
            <li><img src="/linkedin.png" alt=""></li>
          </ul>
          <button class="btn btn-primary px-6 py-3">
            <img src="https://developer.apple.com/news/images/download-on-the-app-store-badge.png"
                 alt="Disponible sur l'App Store" class="h-10">
          </button>
          <button>
            <img src="https://play.google.com/intl/en_us/badges/static/images/badges/en_badge_web_generic.png"
                 alt="Disponible sur Google Play" class="h-14">
          </button>
        </div>
      </div>
      <div class="flex flex-col items-center justify-center">
        <p class="text-xs w-2/4 mt-5">IKIRU ne remplace pas l'avis d'un professionnel, le diagnostic, le traitement,
          la psychothérapie ou les services de santé mentale. Pour toute question relative à la santé, consultez toujours
          votre médecin. N'ignorez jamais l'avis d'un médecin ou n'omettez pas de demander l'aide d'un professionnel à
          cause de ce que vous avez lu sur IKIRU.</p>
        <div class="border-t border-primary w-[98%] my-6"></div>
        <ul class="flex justify-center items-center space-x-4">
          <li>
            <a href="#" class="text-primary hover:text-secondary">Contactez-nous</a>
          </li>
          <li>
            <a href="#" class="text-primary hover:text-secondary">Mentions légales</a>
          </li>
          <li>
            <a href="#" class="text-primary hover:text-secondary">Politique de confidentialité</a>
          </li>
          <li>
            <a href="#" class="text-primary hover:text-secondary">Conditions générales d’utilisation</a>
          </li>
        </ul>
        <p class="text-center text-dark text-sm py-4">Tous droits réservés. © IKIRU 2024.</p>
      </div>
    </div>
  </footer>
</template>

<script setup>
</script>

<style scoped>
.bg-linear {
  background-image: linear-gradient(to right bottom, #f8f6f0, #f9f3eb, #faefe6, #fcebe3, #fee7e1, #fee7e1, #fee7e1, #fee7e1, #fcebe3, #faefe6, #f9f3eb, #f8f6f0);
}
</style>
