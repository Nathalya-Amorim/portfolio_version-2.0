<template>
    <main>
 
         <div class="row ">
             <div class="col-md-6 center-block ">
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
                    <b-row >     
                        <b-button>Watch</b-button>
                    </b-row>
             </div>



             <div class="col-md-6 center-block">
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

 .name-label {
    font-family: "Chakra Petch", sans-serif;
    color: rgb(248, 249, 255);

 }

 .feature {
    font-family: "Roboto Mono", monospace;
    color: $pink;
    font-size: 3.5em;
 }

 
 .positionIntro {
    margin-top: 130px;
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
 
 
 </style>