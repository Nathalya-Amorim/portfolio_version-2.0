<script setup lang="ts">
import AboutSection from '../components/AboutSection.vue';
import ContactMeSection from '../components/ContactMeSection.vue';
import IntroSection from '../components/IntroSection.vue';
import MyWorkSection from '../components/MyWorkSection.vue';
import NavControllerWidget from '../components/NavControllerWidget.vue';
import NavSection from '../components/NavSection.vue';
import SkillsSection from '../components/SkillsSection.vue';
import SocialWidget from '../components/SocialWidget.vue';

</script>

<template>
  <div class="container-fluid">
    <main id="body"></main>
    <NavSection />
    <div class="home-content">
      <IntroSection />
      <AboutSection />
      <SkillsSection />
      <MyWorkSection />
      <ContactMeSection />
    </div>
    <SocialWidget />
    <NavControllerWidget />
    <footer class="footer mb-20">
      <h2 class="hidden">Footer</h2>
      <p> &copy; Nathalya Menezes 2023</p>
    </footer>
  </div>
</template>
<style lang="scss">
.home-content {
  max-width: 1280px;
  margin: auto;
}

footer {
  p {
    font-family: $font-lexend;
  }
}
</style>
