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
                     <span class="hi">I'm an </span>
                     <span class="text"></span>
                     <span class="cursor">_</span>
                  </h4>
               </div>
            </div>
            <b-row class="intro-resume">
               <a href="/assets/portfolio_resume.pdf" target="_blank">
                  <b-button class="justify-content-center">View my resume</b-button>
               </a>
            </b-row>
         </div>

         <div class="col-md-6 center-block order-1 order-md-2">
            <b-img class="img-fluid" src=../../img/memoji-desktop.png></b-img>
         </div>
      </div>
      <div class="scroll mt-40">
         <div class="flex-center scroll-icon">
            <h2>scroll</h2>
            <h3>&#8595;</h3>
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

   height: calc(100vh - 80px);

   @include tablet {
      // margin-bottom: 250px;
   }

   .scroll {
      order: 4;
      min-height: 200px;
      margin-left: auto;
      margin-right: auto;
      margin-top: auto;

      @include tablet {
         order: 4;
      }

      @include desktop {
         order: 4;
      }
   }

   .name-label {
      font-family: "Chakra Petch", sans-serif;
      color: rgb(248, 249, 255);
      margin-bottom: 0px;
      font-weight: 400;

   }

   .feature {
      font-family: 'Lora', serif;
      color: $pink;
      font-size: 2.5em;

      @include tablet {
         font-size: 3.5em;
      }
   }

   .intro-text {
      text-align: left;

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
      border-radius: 5px;
      padding-left: 5px;
      margin-right: 8px;
      font-weight: 400;
   }

   .text {
      color: white;
      font-size: 1.5em;
      font-family: "Chakra Petch", sans-serif;
      font-weight: 400;
   }

   .cursor {
      color: white;
      font-size: 1.5em;
      font-family: "Chakra Petch", sans-serif;
      font-weight: 400;
   }

   .intro-resume {

      margin-top: 25px;
      margin-bottom: 25px;

      @include tablet {
         font-size: 1.5em;
         height: 250px;
      }


      a {
         margin: auto;

         &:hover {
            text-decoration: none;
         }

         button {
            font-weight: 600;
         }
      }
   }

   .btn {
      margin: auto;
   }


}
</style>