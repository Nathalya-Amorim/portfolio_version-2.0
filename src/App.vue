<script setup>
import NavSection from './components/NavSection.vue';
import SocialWidget from './components/SocialWidget.vue';
import NaVControllerWidget from './components/NavControllerWidget.vue';

</script>

<template>

  <div class="container-fluid">
    <NavSection />
    <router-view />
    <SocialWidget />
    <NaVControllerWidget />
    <footer class="footer mb-20">
      <h2 class="hidden">Footer</h2>
      <p> &copy; Nathálya Menezes 2022</p>
    </footer>
  </div>

</template>

<style lang="scss">
.footer {
  p {
    text-align: center;
  }
}
</style>
