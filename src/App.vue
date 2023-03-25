<script setup>
// import NavSection from './components/NavSection.vue';
// import SocialWidget from './components/SocialWidget.vue';
// import NaVControllerWidget from './components/NavControllerWidget.vue';

</script>

<template>
  <!-- <div class=""> -->
  <router-view />
  <!-- </div> -->
</template>

<style lang="scss">
.footer {
  p {
    text-align: center;
  }
}

.modal-content {
  background-color: $color-bg !important;

  .close {
    color: $white;
  }

  .border-success {
    border: 0px;
  }

  .modal-header {
    padding: 0px;
  }

  .modal-body {
    padding: 0px;
  }

  .modal-title {
    font-size: 2.0rem;
  }

}
</style>
