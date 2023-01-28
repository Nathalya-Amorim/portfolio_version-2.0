<script setup lang="ts">
import AboutSection from '../components/AboutSection.vue';
import ContactMeSection from '../components/ContactMeSection.vue';
import IntroSection from '../components/IntroSection.vue';
import MyWorkSection from '../components/MyWorkSection.vue';
import SkillsSection from '../components/SkillsSection.vue';

</script>

<template>
  <main id="body">
    <IntroSection />
    <AboutSection />
    <SkillsSection />
    <MyWorkSection />
    <ContactMeSection />
  </main>
</template>
<style lang="scss">
main {
  max-width: 1280px;
  margin: auto;
}
</style>
