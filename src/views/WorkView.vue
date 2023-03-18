<script>
import axios from 'axios';
import ColorSample from '../components/ColorSample.vue';

export default {
    name: "WorkView",
    created() {
        axios.get("http://localhost:3000/projects/" + this.id)
            .then(res => {
                this.project = res.data;
            })
            .catch(err => console.log("ERROR: Could not load works data. [ " + err) + " ]");
    },
    data() {
        return {
            id: this.$route.params.id,
            project: {}
        };
    },
    methods: {
        goTo(event) {
            this.id = event;
        },

        goHome() {
            this.$router.push('/')
        }
    },
    components: { ColorSample }
}
</script>

<template>
    <main id="body">
        <section v-if="id == '1'" class="work1">
            <h2 class="hidden">Projects </h2>
            <!-- Start Hero -->
            <div class="hero work-hero">
                <img class="work-hero-img" src="/assets/QuatroHero.gif" alt="">
            </div>
            <!-- End Hero -->
            <div class="row container">
                <span class="overview-tag col-12 mt-5">&lt;project overview&gt;</span>
                <div class="row mb-5 mt-5">
                    <!-- Start Project Description -->
                    <div class="col-md-6">
                        <div class="col-12">
                            <span class="title pink">Quatro&nbsp;</span><span class="title green">Sparkling Water</span>
                        </div>
                        <div class="col-12">
                            <p>The Quatro Sparkling Water rebranding project aimed to give the brand a fresh and modern look
                                both in
                                terms of its packaging and website. As a part of this project, we worked on developing a new
                                brand
                                identity that better aligned with Quatro’s core values and products. Our team worked on
                                creating
                                an
                                attractive and user-friendly website that effectively showcased Quatro’s sparkling water
                                products.
                            </p>
                        </div>
                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="row">

                        </div>
                        <div class="col-12">
                            <span class="title small pink">Team</span>
                            <p>Nathalya Menezes<br>Tallyta Triolo</p>
                        </div>
                        <!-- End Team-->

                        <!-- Start Timeline -->
                        <div class="col-12">
                            <span class="title small pink">Timeline</span>
                            <p>3 months</p>
                        </div>
                        <!-- End Timeline -->

                        <!-- Start Tools-->
                        <div class="col-12">
                            <span class="title small pink">Tools</span>
                            <div class="row">
                                <img class="tool-icon" src='/assets/icon_ae.svg' alt="After Effects Icon">
                                <img class="tool-icon" src='/assets/icon_xd.svg' alt="Adobe XD Icon">
                                <img class="tool-icon" src='/assets/icon_in.svg' alt="Adobe Indesing Icon">
                                <img class="tool-icon" src='/assets/icon_ps.svg' alt="Adobe Photoshop Icon">
                                <img class="tool-icon" src='/assets/icon_ai.svg' alt="Adobe Illustrator Icon">
                                <img class="tool-icon" src='/assets/icon_c4d.svg' alt="Cinema 4D Icon">
                                <img class="tool-icon" src='/assets/icon_github.svg' alt="Git Hub Icon">
                                <img class="tool-icon" src='/assets/icon_html.svg' alt="HTML Icon">
                                <img class="tool-icon" src='/assets/icon_css3.svg' alt="CSS Icon">
                                <img class="tool-icon" src='/assets/icon_javascript.svg' alt="JavaScript Icon">

                                <!-- TODO: add more icons here -->
                            </div>
                        </div>
                        <!-- End Timeline -->
                    </div>
                </div>

                <div class="row mb-5 mt-5">
                    <div class="col-md-6">
                        <!-- Start Problem Statement -->
                        <div class="col-12">
                            <span class="title pink">Problem</span><span class="title green"> Statement</span>
                        </div>
                        <div class="col-12">
                            <p> Problem Statement: Quatro, a brand established in 1983, needs a complete rebranding to stay
                                relevant
                                in the current market. The challenge is to modernize the brand without losing its original
                                essence
                                and core values.The goal is to create a new brand image that is contemporary, visually
                                appealing,
                                and reflects Quatro's core values.</p>
                        </div>

                        <!-- End Problem Statement -->
                    </div>
                    <div class="col-md-6">
                        <!-- Start Solution Statement -->
                        <div class="col-12">
                            <span class="title pink">Solution</span><span class="title green"> Statement</span>
                            <p> The solution is to conduct intensive research on what the most modern brands and websites
                                offer to
                                their customers. The goal is to identify the visual elements that are most appealing to the
                                target
                                audience, including colors, shapes, and typography. This will ensure that the new brand
                                identity is
                                contemporary and visually appealing.
                                The research will also involve analyzing the competition to identify gaps and opportunities
                                in the
                                market. This will enable the team to develop a unique brand identity that stands out from
                                the
                                competition.</p>
                        </div>
                        <!-- End Solution Statement -->
                    </div>
                </div>
                <!-- Start Project Process -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">01. Project</span><span class="title green"> Process</span>
                </div>
                <div class="col-12">
                    <p>
                        The design process helps to solve any kind of problem and put the user at the centre at the analysis
                        of their needs. To make a good experience and be satisfied with using any product or service to
                        achieve their goal.
                    </p>
                </div>
                <!--End  Project Process -->

                <!-- Start Moodboard -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">02. Mood</span><span class="title green"> Board</span>
                </div>
                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_moodBoard01.png" alt="Brand's MoodBoard">
                </div>
                <!-- End Moodboard -->

                <!-- Start User Persona -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">03. User</span><span class="title green"> Persona</span>
                </div>
                <div class="col-12">
                    <p>The design process helps to solve any kind of problem and put the user at the centre at the analysis
                        of their needs. To make a good experience and be satisfied with using any product or service to
                        achieve their goal.
                    </p>
                </div>
                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_persona.png" alt="Persona Map">
                </div>
                <!-- End User Persona -->

                <!-- Start Empathy Map -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">04. Empathy</span><span class="title green"> Map</span>
                </div>
                <div class="col-12">
                    <p>Using the user persona, I defined how the target profile will say, think, feel and do about choosing
                        our brand.
                    </p>
                </div>
                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_mapEmpathy.png" alt="Empathy Map">
                </div>
                <!-- End Empathy Map -->

                <!-- Start Sketches -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">05. Logo </span><span class="title green"> Sketches</span>
                </div>

                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_sketches.png" alt="Logo Sketches">
                </div>
                <!-- End Sketches -->

                <!-- Start Logo Versions-->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">06. Logo </span><span class="title green"> Versions</span>
                </div>

                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_versions.png" alt="Logo Versions">
                </div>
                <!-- End Logo Versions-->


                <!-- Start Typography -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">07. Typo</span><span class="title green">graphy</span>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <span class="title pink cooperFont typoSize">Cooper Black</span>
                        <p class="cooperFont typoSize">A B C D E F G H I J K L M N<br> O P Q R S T U V W X Y Z</p>
                        <p class="cooperFont typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <span class="title pink">TW Cen MT Regular</span>
                        <p class="tw-font typoSize">A B C D E F G H I J K L M N <br>O P Q R S T U V W X Y Z</p>
                        <p class="tw-font typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>
                </div>
                <!-- End Sketches -->

                <!-- Start Color Palette -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">08. Color</span><span class="title green"> Palette</span>
                </div>
                <div class="row">
                    <ColorSample color="#E9CB4A" />
                    <ColorSample color="#A9C954" />
                    <ColorSample color="#E37A3B" />
                    <ColorSample color="#DB434A" />
                </div>
                <!-- End Color Palette -->

                <!-- Start Site Map -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">09. Site </span><span class="title green">Map</span>
                </div>

                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_siteMap.jpg" alt="Site Map of the website">
                </div>
                <!-- End Start Site Map -->

                <!-- Start Grid System -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">10. Grid </span><span class="title green">System</span>
                </div>

                <div class="col-12">
                    <!-- <img class="full-width" src="/assets/quatro_siteMap.jpg" alt="Mobile and Desktop Grid System"> -->
                </div>
                <!-- End Grid System -->

                <!-- Start User Flow -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">11. User </span><span class="title green">Flow</span>
                </div>

                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_UserFlow.jpg" alt="User Flow">
                </div>
                <!-- End User Flow -->

                <!-- Start Wireframe -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">12. Wire</span><span class="title green">frame</span>
                </div>

                <div class="col-12 mb-3">
                    <img class="full-width" src="/assets/quatro_wireframe01.png" alt="Low Fidelity Wireframe">
                </div>

                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_wireframe02.png" alt="High Fidelity Wireframe">
                </div>
                <!-- End Wireframe -->

                <!-- Start Prototype -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">13.Proto </span><span class="title green">type</span>
                </div>

                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_prototype.jpg" alt="Prototype">
                </div>
                <!-- End Prototype -->

                <!-- Start Advertisment -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">14.Mock </span><span class="title green">Ups</span>
                </div>

                <div class="col-12 mb-3">
                    <img class="full-width" src="/assets/quatro_mockup01.jpg" alt="Girls wearing Quatro's T-shirt">
                </div>

                <div class="col-12 mb-3">
                    <img class="full-width" src="/assets/quatro_mockup02.jpg" alt="Megazine with Quatro's advertisment">
                </div>
                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_mockup03.jpg"
                        alt=" Second Megazine with Quatro's advertisment ">
                </div>
                <!-- End Advertisment -->

                <!-- Start Video  -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">15. Promotional Video </span><span class="title green">Flow</span>
                </div>

                <div class="col-md-12">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/wNFhd7w-0D0"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
                <!-- End Video-->

                <!-- Start See Live  -->
                <div class="col-12 mb-5 mt-5">
                    <span class="title pink">16.Proto </span><span class="title green">type</span>
                </div>

                <div class="col-12">
                    <img class="full-width" src="/assets/quatro_seeLive.jpg" alt="Quatro in a phone and computer">
                </div>
                <!-- End See Live-->
                <span class="overview-tag col-12 mt-5 mb-5">&lt;/project overview&gt;</span>

                <!-- Start Thanks  -->
                <div class="col-12">
                    <img src="" alt="">
                </div>
                <div class="col-12 thanks">
                    <span class="row highlight">Thanks for journeying through my project!</span>
                    <span class="row normal"> If you’re ready to take the next step, let’s make something great
                        together</span>
                </div>
                <div class="col-12 thanks d-flex mt-5">
                    <div class="m-auto"><b-button class="justify-content-center">OF COURSE</b-button></div>
                </div>

                <!-- End Thanks  -->
            </div>

            <div class="row container-fluid projects-navbar m-0 p-0 mt-5">
                <div class="col-6 nav-button bg-color-lime-green d-flex" @click="goHome()">
                    <span class="">Back to home</span>
                </div>
                <div class="col-6 nav-button bg-color-pink d-flex" @click="goTo(2)">
                    <span>Next project</span>
                </div>
            </div>
        </section>
        <section v-if="project['project_id'] == '2'">

        </section>
        <section v-if="project['project_id'] == '3'"></section>
        <section v-if="project['project_id'] == '4'"></section>
        <section v-if="project['project_id'] == '5'"></section>
        <section v-if="project['project_id'] == '6'"></section>
        <section v-if="project['project_id'] == '7'"></section>
        <section v-if="project['project_id'] == '8'"></section>
        <section v-if="project['project_id'] == '9'"></section>
    </main>
</template>
<style lang="scss" scoped>
main {

    .hero.work-hero {

        .work-hero-img {
            height: 100%;
            width: 100%;
        }

        @include tablet {
            height: 100vh;
            width: 100vw;
            background-size: cover;
            background-repeat: no-repeat;
            background-image: url(/assets/quatroHero.gif);
            background-attachment: fixed;

            .work-hero-img {
                display: none;
            }
        }
    }

    section {
        margin: 0px;
    }

    p {
        color: $white;
        font-family: $font-lexend;
    }

    .work1 {
        font-family: $font-headings;

        .overview-tag {
            color: $lime-green;
            font-size: 2.5em;
            font-weight: bold;
        }

        .title {
            font-weight: bold;
            font-size: 1.7em;

            &.pink {
                color: $pink;
            }

            &.green {
                color: $lime-green;
            }

            &.small {
                font-size: 1.5em;
            }
        }

        .tool-icon {
            height: 30px;
            width: 30px;
            margin-left: 15px;
            margin-bottom: 10px;
        }

        .full-width {
            width: 100%;
        }

        .cooperFont {
            font-family: "cooper-black-std", serif;
            font-weight: 400;
        }

        .typoSize {
            font-size: 2em;
        }

        .tw-font {
            font-family: 'fontscorecomttwcenmt' !important;
        }

    }

    .projects-navbar {
        .nav-button {
            height: 100px;
            cursor: pointer;
            transition: all ease-in-out .2s;



            &.bg-color-lime-green {
                background-color: $lime-green;

                &:hover {
                    background-color: $green;
                }
            }

            &.bg-color-pink {
                background-color: $pink;

                &:hover {
                    background-color: $green;
                }
            }
        }

        span {
            color: $white;
            font-weight: bold;
            margin: auto;
            font-size: 1.3em;
            text-transform: uppercase;

            @include tablet {
                font-size: 2em;
            }
        }
    }

    .thanks {

        span {
            text-align: center;
            display: block;
            margin-bottom: 10px;

            &.highlight {
                color: $pink;
                font-weight: bold;
                font-size: 1.5em;
            }

            &.normal {
                color: $white;
                font-weight: bold;
            }
        }
    }
}
</style>
