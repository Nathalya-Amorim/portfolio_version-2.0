<template>
   <main class="intro-section intro-anchor">
      <div class="row ">
         <div class="col-md-6 center-block order-2 order-md-1">
            <div class="intro-subsection">
               <div class="intro-text positionIntro">
                  <h3 class="name-label">Hi, my name is</h3>
                  <span class="feature name">Nathálya Menezes</span>
                  <h4 class="mt-20">
                     <span class="box"></span>
                     <span class="hi">I'm a </span>
                     <span class="text"></span>
                     <span class="cursor">_</span>
                  </h4>
               </div>
            </div>
            <b-row class="intro-resume">
               <b-button class="justify-content-center">View my resume</b-button>
            </b-row>
         </div>

         <div class="col-md-6 center-block order-1 order-md-2">
            <b-img class="img-fluid" src=../../img/memoji-desktop.png></b-img>
         </div>
      </div>
   </main>
</template>

<script>
export default {
   name: 'IntroSection'
}
</script>


<style lang="scss">
.intro-section {

   @include tablet {
      margin-bottom: 250px;
   }

   .name-label {
      font-family: "Chakra Petch", sans-serif;
      color: rgb(248, 249, 255);

   }

   .feature {
      font-family: "Roboto Mono", monospace;
      color: $pink;
      font-size: 2.5em;

      @include tablet {
         font-size: 3.5em;
      }
   }

   .intro-text {
      text-align: center;

      @include tablet {
         text-align: left;
      }

   }

   h4 {
      font-size: 1.0em;

      @include tablet {
         font-size: 1.5em;
      }
   }


   .positionIntro {
      margin-top: 20px;

      @include tablet {
         margin-top: 130px;
      }
   }

   .hi {
      color: white;
      font-size: 1.5em;
      font-family: "Chakra Petch", sans-serif;
   }

   .text {
      color: white;
      font-size: 1.5em;
      font-family: "Chakra Petch", sans-serif;
   }

   .cursor {
      color: white;
      font-size: 1.5em;
      font-family: "Chakra Petch", sans-serif;

   }

   .intro-resume {
      height: 250px;
   }

   .btn {
      margin: auto;
   }
}
</style>