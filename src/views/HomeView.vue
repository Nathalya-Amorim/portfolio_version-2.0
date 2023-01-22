<script setup lang="ts">
import AboutSection from '../components/AboutSection.vue';
// import NavSection from '../components/NavSection.vue';
import IntroSection from '../components/IntroSection.vue';

</script>

<template>
  <main id="body">
    <IntroSection />
    <AboutSection />
  </main>
</template>
<style lang="scss">
main {
  max-width: 1280px;
  margin: auto;
}
</style>
