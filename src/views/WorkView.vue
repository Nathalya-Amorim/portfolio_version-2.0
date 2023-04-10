<script>
import ColorSample from '../components/ColorSample.vue';
import ContactMeSection from '../components/ContactMeSection.vue';
import ProcessCard from '../components/ProcessCard.vue';
import WorkNavigationBar from '../components/WorkNavigationBar.vue';

export default {
    name: "WorkView",
    mounted() {

    },
    data() {
        return {
            id: this.$route.params.id,
            project: {}
        };
    },
    methods: {
        goTo(event) {
            console.log(event);
            this.id = event;
        },

        goHome() {
            this.$router.push('/')
        },

        onNavigate(event) {
            this.id = event;
            this.scrollToTop();
        },
        scrollToTop() {
            window.scrollTo(0, 0);
        },
        showModal() {
            console.log("TEST")
            this.$refs['my-modal'].show();
        }


    },
    components: { ColorSample, ProcessCard, WorkNavigationBar, ContactMeSection }
}
</script>

<template>
    <main id="body" class="work-body">
        <a href="/" class="float">
            <i class="fa-solid fa-house fa-xl"></i>
        </a>
        <section v-if="id == '1'" class="work1">
            <h2 class="hidden">Project Quatro Sparklign Water</h2>
            <!-- Start Hero -->

            <div class="hero work-hero quatro">
                <img class="work-hero-img" src="/assets/quatro_hero.jpg" alt="Quatro Hero Image">
            </div>
            <!-- End Hero -->
            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>

                <div class="row mb-5 mt-5">
                    <!-- Start Project Description -->
                    <div class="col-md-6">
                        <div class="col-12">
                            <div class="title-container">
                                <span class="title pink">Quatro&nbsp;</span><span class="title green">Sparkling Water</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>The Quatro Sparkling Water rebranding project aimed to give the brand a fresh and modern look
                                both in
                                terms of its packaging and website. As a part of this project, we worked on developing a new
                                brand
                                identity that better aligned with Quatro’s core values and products. Our team worked on
                                creating a new, attractive, and user-friendly website that effectively showcased Quatro's
                                sparkling water products as part of the rebranding project.
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
                                <img class="tool-icon" src='/assets/icon_gitHub.svg' alt="Git Hub Icon">
                                <img class="tool-icon" src='/assets/icon_html.svg' alt="HTML Icon">
                                <img class="tool-icon" src='/assets/icon_css3.svg' alt="CSS Icon">
                                <img class="tool-icon" src='/assets/icon_javascript.svg' alt="JavaScript Icon">

                                <!-- TODO: add more icons here -->
                            </div>
                        </div>
                        <!-- End Timeline -->
                    </div>
                </div>
                <!-- Start Problem Statement -->
                <div class="row mb-5 mt-5">
                    <div class="col-md-6">
                        <div class="col-12">
                            <img class="illustrateImage " src="/assets/problem.svg" alt="Problem Image">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="col-12 m-auto">
                            <div class="title-container">
                                <span class="title pink">Problem</span><span class="title green"> Statement</span>
                            </div>

                            <p> Quatro, a brand established in 1983, needed a complete rebranding to stay relevant in the
                                current market. The challenge was to modernize the brand without losing its original essence
                                and core values. As part of this effort, our team developed a new brand identity that
                                aligned better with Quatro's core values and products. The goal was to create a new
                                brand image that was contemporary, visually appealing, while reflecting Quatro's core
                                values.</p>
                        </div>

                    </div>
                </div>
                <!-- End Problem Statement -->

                <!-- Start Solution Statement -->
                <div class="row mb-5 mt-5">
                    <div class="col-md-6 d-flex">
                        <div class="col-12 m-auto">
                            <div class="title-container">
                                <span class="title pink">Solution</span><span class="title green"> Statement</span>
                            </div>

                            <p> The solution was to identify the visual elements that would be most appealing to the target
                                audience, including colors, shapes, and typography. This ensured that the new brand identity
                                was contemporary and visually appealing. The research also involved analyzing the
                                competition to identify gaps and opportunities in the market, which enabled the team to
                                develop a unique brand identity that stood out from the competition.</p>
                        </div>

                        <!-- End Problem Statement -->
                    </div>
                    <div class="col-md-6">
                        <!-- Start Solution Statement -->
                        <div class="col-12">

                            <div class="col-12">
                                <img class="illustrateImage" src="/assets/solution.svg" alt="Solution Image">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Solution Statement -->

                <!-- Start Project Process -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="col-12">
                            <div class="title-container">
                                <span class="title pink">01. Project</span><span class="title green"> Process</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <p>
                                Designing with the user in mind helps solve problems and creates products or services that
                                meet their needs and goals. By focusing on the user's perspective, we can ensure a
                                satisfying experience that leaves them happy with the end result.
                            </p>
                        </div>
                        <div class="row process-cards">
                            <ProcessCard title="Empathize" type="discover" />
                            <ProcessCard title="Define" type="define" />
                            <ProcessCard title="Ideate" type="ideat" />
                            <ProcessCard title="Design" type="design" />
                            <ProcessCard title="Test" type="test" />
                        </div>
                    </div>
                </div>
                <!--End  Project Process -->

                <!-- Start Moodboard -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Mood</span><span class="title green"> Board</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_moodboard01.png" alt="Brand's MoodBoard">
                    </div>
                </div>
                <!-- End Moodboard -->

                <!-- Start User Persona -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">03. User</span><span class="title green"> Persona</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <p>By using the user persona, we defined the target audience's thoughts, feelings, actions, and
                            opinions when choosing our brand.
                        </p>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_persona.png" alt="Persona Map">
                    </div>
                </div>
                <!-- End User Persona -->

                <!-- Start Empathy Map -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">04. Empathy</span><span class="title green"> Map</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <p>Empathy Map is a collaborative tool that teams can use to gain deeper insights into their
                            customers.
                            The Empathy Map represents a group of users, such as a customer segment.
                        </p>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_mapEmpathy.png" alt="Empathy Map">
                    </div>
                </div>
                <!-- End Empathy Map -->

                <!-- Start Sketches -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">05. Logo </span><span class="title green"> Sketches</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_sketches.png" alt="Logo Sketches">
                    </div>
                </div>
                <!-- End Sketches -->

                <!-- Start Logo Versions-->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">06. Logo </span><span class="title green"> Versions</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_versions.jpg" alt="Logo Versions">
                    </div>
                </div>
                <!-- End Logo Versions-->

                <!-- Start Typography -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">07. Typo</span><span class="title green">graphy</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <span class="title pink cooperFont typoSize">Cooper Black</span>
                        <p class="cooperFont typoSize">A B C D E F G H I J K L M N<br> O P Q R S T U V W X Y Z</p>
                        <p class="cooperFont typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <span class="twTitle pink">TW Cen MT Regular</span>
                        <p class="tw-font typoSize">A B C D E F G H I J K L M N <br>O P Q R S T U V W X Y Z</p>
                        <p class="tw-font typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>
                </div>
                <!-- End Sketches -->

                <!-- Start Color Palette -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">08. Color</span><span class="title green"> Palette</span>
                        </div>
                    </div>
                    <div class="row color-palette-group">
                        <ColorSample color="#E9CB4A" />
                        <ColorSample color="#A9C954" />
                        <ColorSample color="#E37A3B" />
                        <ColorSample color="#DB434A" />
                    </div>
                </div>
                <!-- End Color Palette -->

                <!-- Start Site Map -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">09. Site </span><span class="title green">Map</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_siteMap.jpg" alt="Site Map of the website">
                    </div>
                </div>
                <!-- End Start Site Map -->

                <!-- Start Grid System -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">10. Grid </span><span class="title green">System</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_grid.jpg" alt="Mobile and Desktop Grid System">
                    </div>
                </div>
                <!-- End Grid System -->

                <!-- Start User Flow -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">11. User </span><span class="title green">Flow</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <p>We used the tool Creately to create a visual representation that explains how users can share
                            their
                            recipes with the team. The recipes will be displayed on the website.
                        </p>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_UserFlow.jpg" alt="User Flow">
                    </div>
                </div>
                <!-- End User Flow -->

                <!-- Start Wireframe -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">12. Wire</span><span class="title green">frame</span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/quatro_wireframe01.png" alt="Low Fidelity Wireframe">
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_wireframe02.png" alt="High Fidelity Wireframe">
                    </div>
                </div>
                <!-- End Wireframe -->

                <!-- Start Prototype -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">13. Proto</span><span class="title green">type</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_prototype.jpg" alt="Prototype">
                    </div>
                </div>
                <!-- End Prototype -->

                <!-- Start Advertisment -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">14. Ads </span><span class="title green">Campaign</span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/quatro_mockup01.jpg" alt="Girls wearing Quatro's T-shirt">
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/quatro_mockup02.jpg" alt="Megazine with Quatro's advertisment">
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/quatro_mockup03.jpg"
                            alt=" Second Megazine with Quatro's advertisment ">
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/quatro_mockup04.jpg"
                            alt=" Second Megazine with Quatro's advertisment ">
                    </div>
                </div>
                <!-- End Advertisment -->

                <!-- Start Video  -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">15. Video </span><span class="title green">Campaign</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/wNFhd7w-0D0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
                <!-- End Video-->

                <!-- Start See Live  -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">16. See</span><span class="title green"> Live</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <a href="https://quatro.nathalyamenezes.ca/" target="_blank">
                            <img class="full-width" src="/assets/quatro_seeLive.jpg" alt="Quatro in a phone and computer">
                        </a>
                    </div>
                </div>
                <!-- End See Live-->

                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->
            </div>
            <WorkNavigationBar :next-page="2" :show-home-as-button="true" @navigate="onNavigate" />
            <!-- START WE ARE ALL HOCKEY -->
        </section>
        <!-- WE ARE ALL HOCKEY -->
        <section v-if="id == '2'" class="work1">
            <h2 class="hidden">Project We Are All Hockey</h2>
            <!-- Start Hero -->
            <div class="hero work-hero hockey">
                <img class="work-hero-img" src="/assets/hockey_hero.jpg" alt="We Are All Hockey Image">
            </div>
            <!-- End Hero -->
            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>
                <!-- Start Project Description -->
                <div class="row mb-5 mt-5">
                    <div class="col-md-6">
                        <div class="col-12">
                            <div class="title-container">
                                <span class="title pink">We Are&nbsp;</span><span class="title green">All Hockey</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <p>We Are All Hockey is a campaign aimed at raising awareness about women bullying in hockey
                                games.
                                The
                                campaign is dedicated to people of all ages, but with a focus on women, who have
                                historically
                                been
                                underrepresented and subject to bullying in the sport. To achieve its goals, the campaign
                                encompasses
                                a variety of activities, including interviews, a website, and advertising projects.
                            </p>
                        </div>
                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="col-12">
                            <span class="title small pink">Team</span>
                            <p>Laura Albarracin<br>Mariia Shevchenko<br>Nathalya Menezes<br>Tallyta Triolo</p>
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
                                <img class="tool-icon" src='/assets/icon_in.svg' alt="Adobe Indesing Icon">
                                <img class="tool-icon" src='/assets/icon_ps.svg' alt="Adobe Photoshop Icon">
                                <img class="tool-icon" src='/assets/icon_ai.svg' alt="Adobe Illustrator Icon">
                                <img class="tool-icon" src='/assets/icon_figma.svg' alt="Figma Icon">
                                <img class="tool-icon" src='/assets/icon_gitHub.svg' alt="Git Hub Icon">
                                <img class="tool-icon" src='/assets/icon_vuejs.svg' alt="Vue Icon">
                                <img class="tool-icon" src='/assets/icon_bootstrap.svg' alt="Bootstrap Icon">
                                <img class="tool-icon" src='/assets/icon_nodejs.svg' alt="Node Js Icon">
                                <img class="tool-icon" src='/assets/icon_php.svg' alt="PHP Icon">

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Timeline -->

                <!-- Start Problem Statement -->
                <div class="row mb-5 mt-5">
                    <div class="col-md-6">
                        <div class="col-12">
                            <img class="illustrateImage " src="/assets/problem.svg" alt="Problem Image">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="col-12 m-auto">
                            <div class="title-container">
                                <span class="title pink">Problem</span><span class="title green"> Statement</span>
                            </div>
                            <p> Our challenge requires an appealing visual and brand identity that will catch people's
                                attention
                                and encourage them to participate. We need to create a comprehensive campaign that engages
                                individuals, teams, and communities in taking a stand against bullying and supporting
                                women's
                                hockey. Our goal is to empower women and promote a safe and inclusive environment for all
                                hockey
                                players, regardless of their gender.</p>
                        </div>
                    </div>
                </div>
                <!-- End Problem Statement -->

                <!-- Start Solution Statement -->
                <div class="row mb-5 mt-5">
                    <div class="col-12 col-md-6">
                        <div class="col-12 m-auto">
                            <div class="title-container">
                                <span class="title pink">Solution</span><span class="title green"> Statement</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <p> As a solution we purpose to create a digital platform that allows individuals, teams, and
                                communities to share their stories, experiences, and ideas on how to tackle bullying in
                                hockey.
                                The platform will also provide resources, tools, and guidance on how to recognize, report,
                                and
                                prevent bullying. And also a brand and visual identity that resonates with the target
                                audience
                                and communicates our message effectively. The branding will be consistent across all
                                campaign
                                materials, including social media, posters, flyers, and merchandise.</p>
                        </div>
                        <!-- End Problem Statement -->
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Start Solution Statement -->
                        <div class="col-12">
                            <div class="col-12">
                                <img class="illustrateImage " src="/assets/solution.svg" alt="Solution Image">
                            </div>
                        </div>
                        <!-- End Solution Statement -->
                    </div>
                </div>
                <!-- Start Project Process -->

                <!-- Start Project Process -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">01. Project</span><span class="title green"> Process</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>
                            Designing with the user in mind helps solve problems and creates products or services that
                            meet their needs and goals. By focusing on the user's perspective, we can ensure a
                            satisfying experience that leaves them happy with the end result.
                        </p>
                    </div>
                    <div class="row process-cards">
                        <ProcessCard title="Empathize" type="discover" />
                        <ProcessCard title="Define" type="define" />
                        <ProcessCard title="Ideate" type="ideat" />
                        <ProcessCard title="Design" type="design" />
                        <ProcessCard title="Test" type="test" />
                    </div>
                </div>
                <!--End  Project Process -->

                <!-- Start Logo Versions-->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Logo </span><span class="title green"> Versions</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/versions_hockey.png" alt="Logo Versions">
                    </div>
                </div>
                <!-- End Logo Versions-->

                <!-- Start Site Map -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">03. Site </span><span class="title green">Map</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/hockey_siteMap.jpg" alt="Site Map of the website">
                    </div>
                </div>
                <!-- End Start Site Map -->

                <!-- Start Typography -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">04. Typo</span><span class="title green">graphy</span>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <span class="title pink exoFontBold typoSize">Exo 2 Medium</span>
                        <p class="  exoFontBold typoSize">A B C D E F G H I J K L M N<br> O P Q R S T U V W X Y Z</p>
                        <p class="exoFontBold typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <span class=" robotoTitle pink robotoFontR">Roboto Regular</span>
                        <p class="robotoFontR typoSize">A B C D E F G H I J K L M N <br>O P Q R S T U V W X Y Z</p>
                        <p class="robotoFontR typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>

                </div>

                <!-- End Sketches -->

                <!-- Start Color Palette -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">05. Color</span><span class="title green"> Palette</span>
                        </div>
                    </div>
                    <div class="row color-palette-group">
                        <ColorSample color="#542A7D" />
                        <ColorSample color="#67686A" />
                        <ColorSample color="#4D4C50" />
                        <ColorSample color="#E1663B" />
                        <ColorSample color="#DB3A38" />
                        <ColorSample color="#179CC8" />
                    </div>
                </div>

                <!-- End Color Palette -->

                <!-- Start User Flow -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">06. User </span><span class="title green">Flow</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <p>We used the tool Creately to create a visual representation that explains how users can share
                            their
                            feedback or ideas with us.
                        </p>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/hockey_userFlow.jpg" alt="User Flow">
                    </div>
                </div>
                <!-- End User Flow -->

                <!-- Start Wireframe -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">07. Wire</span><span class="title green">frame</span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/hockey_wireframe02.png" alt="Low Fidelity Wireframe">
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/hockey_wireframe01.png" alt="High Fidelity Wireframe">
                    </div>
                </div>
                <!-- End Wireframe -->

                <!-- Start Advertisment -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">08. Ads </span><span class="title green">Campaign</span>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/hockey_mockup01.png" alt="Campaign's Billboard">
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/hockey_mockup03.jpg" alt="Camapaig's Bracelet">
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/hockey_mockup02.jpg" alt=" Campaign's hat ">
                    </div>
                    <div class="col-12 mb-03">
                        <img class="full-width" src="/assets/hockey_mockup04.jpg" alt=" Campaign's hat ">
                    </div>
                </div>
                <!-- End Advertisment -->
                <!-- Start Video  -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">09. Video </span><span class="title green">Campaign</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/yXOsVaxETxw"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
                <!-- End Video-->

                <!-- Start See Live  -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">10. See </span><span class="title green">Live</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <a href="https://weareallhockey.nathalyamenezes.ca/" target="_blank">
                            <img class="full-width" src="/assets/hockey_seeLive.jpg" alt="Quatro in a phone and computer">
                        </a>
                    </div>
                </div>
                <!-- End See Live-->
                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->
            </div>
            <WorkNavigationBar :previous-page="1" :next-page="3" :show-home-as-button="false" :show-home-as-icon="true"
                @navigate="onNavigate" />
        </section>

        <!-- BANTING HOUSE PROJECT -->
        <section v-if="id == '3'" class="work1">
            <h2 class="hidden">Project Banting House</h2>
            <!-- Start Hero -->
            <div class="hero work-hero banting">
                <img class="work-hero-img" src="/assets/banting_hero.jpg" alt="Banting House Image">
            </div>
            <!-- End Hero -->
            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>
                <!-- Start Project Description -->
                <div class="row mb-5 mt-5">
                    <div class="col-md-6">
                        <div class="col-12">
                            <span class="title pink">Banting&nbsp;</span><span class="title green">House</span>
                        </div>
                        <div class="col-12">
                            <p>Our team was responsible for rebranding and developing multimedia and interactive content for
                                the
                                Banting House National Historic Site website. The project aimed to give the website a modern
                                and attractive
                                appearance while adhering to Diabetes Canada guidelines for color palettes and fonts.
                                Throughout
                                the
                                project, we received feedback from the client to ensure their needs were met. We also
                                restructured
                                and reorganized all the content and assets from the previous website as part of the project.
                            </p>
                        </div>
                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="col-12">
                            <div class="title-container">
                                <span class="title small pink">Team</span>
                            </div>
                            <p>Evan Hanson<br>Gonzalo Arango<br>Jerome Fernandez<br>Nathalya Menezes<br>Tallyta
                                Triolo<br>Zeyin
                                Lu
                            </p>
                        </div>
                        <!-- End Team-->

                        <!-- Start Timeline -->
                        <div class="col-12">
                            <div class="title-container">
                                <span class="title small pink">Timeline</span>
                            </div>
                            <p>3 months</p>
                        </div>
                        <!-- End Timeline -->

                        <!-- Start Tools-->
                        <div class="col-12">
                            <div class="title-container">
                                <span class="title small pink">Tools</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="row ">
                                <img class="tool-icon" src='/assets/icon_ae.svg' alt="After Effects Icon">
                                <img class="tool-icon" src='/assets/icon_in.svg' alt="Adobe Indesing Icon">
                                <img class="tool-icon" src='/assets/icon_ps.svg' alt="Adobe Photoshop Icon">
                                <img class="tool-icon" src='/assets/icon_ai.svg' alt="Adobe Illustrator Icon">
                                <img class="tool-icon" src='/assets/icon_xd.svg' alt="Adobe XD Icon">
                                <img class="tool-icon" src='/assets/icon_gitHub.svg' alt="Git Hub Icon">
                                <img class="tool-icon" src='/assets/icon_wordpress.svg' alt="Vue Icon">
                            </div>
                        </div>
                    </div>
                    <!-- End Timeline -->
                </div>
                <!-- Start Problem Statement -->
                <div class="row mb-5 mt-5">
                    <div class="col-12 col-md-6">
                        <div class="col-12">
                            <img class="illustrateImage " src="/assets/problem.svg" alt="Problem Image">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 m-auto">
                        <div class="title-container">
                            <span class="title pink">Problem </span><span class="title green">Statement</span>
                        </div>
                        <p> Our challenge was to restructure and reorganize all the content and assets from the previous
                            website to ensure a better user experience, which was complicated by the vast amount of content
                            and the need to maintain the accuracy of information. This required a thorough understanding of
                            the museum's history and exhibits, as well as collaboration with subject matter experts.
                            Additionally, the adherence to Diabetes Canada guidelines for color palettes and fonts added an
                            extra layer of complexity. </p>
                    </div>
                </div>
                <!-- End Problem Statement -->

                <!-- Start Solution Statement -->
                <div class="row mb-5 mt-5">
                    <div class="col-12 col-md-6">
                        <div class="col-12 m-auto">
                            <div class="title-container">
                                <span class="title pink">Solution</span><span class="title green"> Statement</span>
                            </div>
                        </div>
                        <div class="col-12">
                            <p> We conducted a comprehensive review of all content and assets from the previous website to
                                identify areas that needed improvement. We categorized the content and assets according to
                                their relevance and importance, and used this information to inform the restructuring
                                process.We worked closely with subject matter experts to ensure that the new website
                                accurately represented the museum's history and exhibits. We incorporated their feedback and
                                insights to create an engaging and informative user experience.</p>
                        </div>
                        <!-- End Problem Statement -->
                    </div>
                    <div class="col-12 col-md-6">
                        <!-- Start Solution Statement -->
                        <img class="illustrateImage " src="/assets/solution.svg" alt="Solution Image">
                    </div>
                </div>
                <!-- End Solution Statement -->

                <!-- Start Project Process -->
                <div class="row mb-5">
                    <div class="col-12 m-auto">
                        <div class="title-container">
                            <span class="title pink">01. Project</span><span class="title green"> Process</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>
                            Designing with the user in mind helps solve problems and creates products or services that
                            meet their needs and goals. By focusing on the user's perspective, we can ensure a
                            satisfying experience that leaves them happy with the end result.
                        </p>
                    </div>
                    <div class="row process-cards">
                        <ProcessCard title="Empathize" type="discover" />
                        <ProcessCard title="Define" type="define" />
                        <ProcessCard title="Ideate" type="ideat" />
                        <ProcessCard title="Design" type="design" />
                        <ProcessCard title="Test" type="test" />
                    </div>
                </div>
                <!--End  Project Process -->

                <!-- Start Moodboard -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Mood</span><span class="title green"> Board</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/banting_moodboard.png" alt="Brand's MoodBoard">
                    </div>
                </div>
                <!-- End Moodboard -->

                <!-- Start Logo Versions-->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">03. Logo </span><span class="title green"> Versions</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/banting_logoVersion.jpg" alt="Logo Versions">
                    </div>
                </div>
                <!-- End Logo Versions-->

                <!-- Start Site Map -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">04. Site </span><span class="title green">Map</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/banting_sitemap.png" alt="Site Map of the website">
                    </div>
                </div>
                <!-- End Start Site Map -->

                <!-- Start Typography -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">05. Typo</span><span class="title green">graphy</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <span class="openTitle pink openFontR typoSize">Open Sans Regular</span>
                        <p class="  openFontR typoSize">A B C D E F G H I J K L M N<br> O P Q R S T U V W X Y Z</p>
                        <p class="openFontR typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>
                    <div class="col-12 col-md-6">
                        <span class="title pink openFontB typoSize">Open Sans Bold</span>
                        <p class="  openFontB typoSize">A B C D E F G H I J K L M N<br>O P Q R S T U V W X Y Z</p>
                        <p class="openFontB typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>
                </div>
                <!-- End Sketches -->

                <!-- Start Color Palette -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">06. Color</span><span class="title green"> Palette</span>
                        </div>
                    </div>
                    <div class="row color-palette-group">
                        <ColorSample color="#00B1EB" />
                        <ColorSample color="#213368" />
                        <ColorSample color="#4D4C50" />
                        <ColorSample color="#F58220" />
                        <ColorSample color="#E4E5E6" />
                    </div>
                </div>
                <!-- End Color Palette -->

                <!-- Start Wireframe -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">07. Wire</span><span class="title green">frame</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/bh_low_wire.png" alt="Low Fidelity Wireframe">
                    </div>
                </div>
                <!-- End Wireframe -->

                <!-- Start Advertisment -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">08. Ads </span><span class="title green">Campaign</span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/banting_mockup02.jpg" alt="Social Media Advertisment">
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/banting_businessCard.png" alt="Business Card Advertsiment">
                    </div>
                </div>
                <!-- End Advertisment --> <!-- Start Video  -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">09. Video </span><span class="title green">Campaign</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/TS-sK7p2AJs"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>

                    </div>
                </div>
                <!-- End Video-->

                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->
            </div>
            <WorkNavigationBar :previous-page="2" :next-page="4" :show-home-as-icon="true" @navigate="onNavigate" />
        </section>

        <!-- CECI PROJECT -->
        <section v-if="id == '4'" class="work1">
            <!-- Start Hero -->
            <h2 class="hidden">Project Ceci</h2>
            <div class="hero work-hero ceci">
                <img class="work-hero-img" src="/assets/ceci_hero.jpg" alt="Ceci Image">
            </div>
            <!-- End Hero -->
            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>
                <div class="row mb-5 mt-5">
                    <!-- Start Project Description -->
                    <div class="col-md-6">
                        <div class="title-container">
                            <span class="title pink">Ceci &nbsp;</span><span class="title green">Cosmetics</span>
                        </div>


                        <p>Ceci is a newly created cosmetic brand designed for young females. Our team developed the
                            product's
                            unique characteristics, which include a natural and organic formulation, and a fresh pastel
                            color
                            palette that brings a youthful and vibrant look. We also created an advertising campaign
                            that
                            emphasizes the brand's commitment to natural and organic ingredients. Ceci is the perfect
                            choice
                            for
                            young women who want to enhance their natural beauty while using safe and eco-friendly
                            products.
                        </p>

                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="col-12">
                            <span class="title small pink">Team</span>
                            <p>Nathalya Menezes<br>Tallyta Triolo
                            </p>
                        </div>
                        <!-- End Team-->

                        <!-- Start Timeline -->
                        <div class="col-12">
                            <span class="title small pink">Timeline</span>
                            <p>3 weeks</p>
                        </div>
                        <!-- End Timeline -->

                        <!-- Start Tools-->
                        <div class="col-12">
                            <span class="title small pink">Tools</span>
                            <div class="row">
                                <img class="tool-icon" src='/assets/icon_ae.svg' alt="After Effects Icon">
                                <img class="tool-icon" src='/assets/icon_in.svg' alt="Adobe Indesing Icon">
                                <img class="tool-icon" src='/assets/icon_ps.svg' alt="Adobe Photoshop Icon">
                                <img class="tool-icon" src='/assets/icon_ai.svg' alt="Adobe Illustrator Icon">
                            </div>
                        </div>
                    </div>
                    <!-- End Timeline -->
                </div>

                <!-- Start Moodboard -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">01. Mood</span><span class="title green"> Board</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/ceci_moodboard.png" alt="Brand's MoodBoard">
                    </div>
                </div>
                <!-- End Moodboard -->

                <!-- Start Typography -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Typo</span><span class="title green">graphy</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <span class="title pink  typoSize">Red Velvet</span>
                        <p class="velvetFont typoSize">A B C D E F G H I J K L M N<br> O P Q R S T U V W X Y Z</p>
                        <p class="velvetFont typoSize">a b c d e f g h i j k l m n<br> o p q r s t u v w x y z</p>
                        <p class="velvetFont typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <span class="title pink niramitFont typoSize">Niramit </span>
                        <p class="niramitFont typoSize">A B C D E F G H I J K L M N<br>O P Q R S T U V W X Y Z</p>
                        <p class="niramitFont typoSize">a b c d e f g h i j k l m n<br> o p q r s t u v w x y z</p>
                        <p class="niramitFont typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>
                </div>
                <!-- End Typography -->

                <!-- Start Color Palette -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Color</span><span class="title green"> Palette</span>
                        </div>
                    </div>
                    <div class="row color-palette-group">
                        <ColorSample color="#B3C8B9" />
                        <ColorSample color="#E5C0B2" />
                        <ColorSample color="#EABFC6" />
                    </div>
                </div>

                <!-- End Color Palette -->

                <!-- Start Advertisment -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">03. Ads </span><span class="title green">Campaign</span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/ceci_mockup01.jpg" alt="Social Media Advertisment">
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/ceci_mockup02.png" alt="Business Card Advertsiment">
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/ceci_mockup03.png" alt="Business Card Advertsiment">
                    </div>
                </div>

                <!-- End Advertisment -->

                <!-- Start Video  -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">04. Video </span><span class="title green">Campaign</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/RKRBrQbs50E"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- End Video-->

                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->
            </div>
            <WorkNavigationBar :previous-page="3" :next-page="5" :show-home-as-icon="true" @navigate="onNavigate" />
        </section>

        <!-- START DEMO REEL PROJECT  -->
        <section v-if="id == '5'" class="work1">
            <h2 class="hidden">Project Demo Reel</h2>
            <!-- Start Hero -->
            <div class="hero work-hero demo-reel">
                <img class="work-hero-img" src="/assets/demoReel_hero.jpg" alt="Demo Reel Image">
            </div>
            <!-- End Hero -->

            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>
                <div class="row mt-5 mb-5">
                    <!-- Start Project Description -->
                    <div class="col-md-6">
                        <div class="title-container">
                            <span class="title pink">Demo </span><span class="title green">Reel</span>
                        </div>
                        <p>Demo Reel is a video project that I created to showcase my skills as a designer and motion
                            designer.
                            I used several tools, Cinema 4D, Photoshop, and After Effects, to create a
                            visually stunning video that highlighted my work. In order to create 3D content to showcase
                            my
                            skills, I spent a lot of time researching and experimenting with new techniques. The final
                            product
                            is a testament to my dedication to my craft and my ability to use a wide range of tools to
                            achieve
                            my goals.
                        </p>
                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="col-12">
                            <span class="title small pink">Team</span>
                            <p>Nathalya Menezes</p>
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
                        </div>
                        <div class="col-12">
                            <div class="row">
                                <img class="tool-icon" src='/assets/icon_ae.svg' alt="After Effects Icon">
                                <img class="tool-icon" src='/assets/icon_ps.svg' alt="Adobe Photoshop Icon">
                                <img class="tool-icon" src='/assets/icon_ai.svg' alt="Adobe Illustrator Icon">
                                <img class="tool-icon" src='/assets/icon_c4d.svg' alt="Cinema 4D Icon">
                            </div>
                        </div>
                    </div>
                    <!-- End Timeline -->
                </div>

                <!-- Start StyleFrame -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">01. Style</span><span class="title green">frame</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/styleframe_portfolio.jpg" alt="Brand's MoodBoard">
                    </div>
                </div>
                <!--End StyleFrame -->

                <!-- Start Creation Process -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Creation </span><span class="title green">Process</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <p>Below, you can see some of my files created during the creation process.
                        </p>
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/demo_process_001.jpg" alt="Brand's MoodBoard">
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/demo_process01.jpg" alt="Brand's MoodBoard">
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/demo_process02.jpg" alt="Brand's MoodBoard">
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/demo_process03.jpg" alt="Brand's MoodBoard">
                    </div>
                </div>

                <!--End Creation Process -->

                <!-- Start Video  -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">03. Demo </span><span class="title green">Reel</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/gMZtcqBedl0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- End Video-->
                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->
            </div>
            <WorkNavigationBar :previous-page="4" :next-page="6" :show-home-as-icon="true" @navigate="onNavigate" />
        </section>

        <!-- Portfolio PROJECT -->
        <section v-if="id == '6'" class="work1">
            <h2 class="hidden">Project Portfolio Site</h2>
            <!-- Start Hero -->
            <div class="hero work-hero portfolio-site">
                <img class="work-hero-img" src="/assets/portfolio_hero.jpg" alt="Portfolio Image">
            </div>
            <!-- End Hero -->

            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>
                <!-- Start Project Description -->
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <div class="title-container">
                            <span class="title pink">Portfolio </span><span class="title green">Website</span>
                        </div>
                        <p>The Portfolio Website was a challenging project that allowed me to showcase my skills as a
                            designer
                            and web developer. I had to select my best work and create a website from scratch, which
                            involved
                            designing a logo, selecting the right color palette, and organizing my photos in a way that
                            accurately reflected my skills and experience. Throughout the project, I was able to put
                            into
                            practice everything I learned during my college years and create a website that accurately
                            represented me as a professional. By the end of it, I was proud of the work I had
                            accomplished
                            and
                            excited to see where my career would take me.
                        </p>
                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="col-12">
                            <span class="title small pink">Team</span>
                            <p>Nathalya Menezes</p>
                        </div>
                        <!-- End Team-->

                        <!-- Start Timeline -->
                        <div class="col-12">
                            <span class="title small pink">Timeline</span>
                            <p>6 months</p>
                        </div>
                        <!-- End Timeline -->

                        <!-- Start Tools-->
                        <div class="col-12">
                            <span class="title small pink">Tools</span>
                        </div>
                        <div class="row">
                            <div class="col-12 shadowImages">
                                <img class="tool-icon" src='/assets/icon_ae.svg' alt="Adobe After Effects Icon">
                                <img class="tool-icon" src='/assets/icon_pr.svg' alt="Adobe Premiere Icon">
                                <img class="tool-icon" src='/assets/icon_ps.svg' alt="Adobe Photoshop Icon">
                                <img class="tool-icon" src='/assets/icon_ai.svg' alt="Adobe Illustrator Icon">
                                <img class="tool-icon" src='/assets/icon_xd.svg' alt="Adobe XD Icon">
                                <img class="tool-icon" src='/assets/icon_bootstrap.svg' alt="Bootstrap Icon">
                                <img class="tool-icon" src='/assets/icon_vuejs.svg' alt="Vue Icon">
                                <img class="tool-icon" src='/assets/icon_nodejs.svg' alt="Node Js Icon">
                                <img class="tool-icon" src='/assets/icon_php.svg' alt="PHP Icon">
                            </div>

                        </div>
                    </div>
                    <!-- End Tools -->
                </div>

                <!-- Start Logo Versions-->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">01. Logo </span><span class="title green"> Versions</span>
                        </div>
                    </div>

                    <div class="col-12">
                        <img class="full-width" src="/assets/portfoli_logoVersion.jpg" alt="Logo Versions">
                    </div>
                </div>
                <!-- End Logo Versions-->

                <!-- Start Typography -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Typo</span><span class="title green">graphy</span>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <span class="title pink chakraFont typoSize">Chakra Petch</span>
                        <p class="  chakraFont typoSize">A B C D E F G H I J K L M N<br> O P Q R S T U V W X Y Z</p>
                        <p class="  chakraFont typoSize">a b c d e f g h i j k l m n<br> o p q r s t u v w x y z</p>
                        <p class=" chakraFont typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>

                    <div class="col-12 col-md-6">
                        <span class="title pink lexedFont typoSize">Lexend</span>
                        <p class="lexedFont typoSize">A B C D E F G H I J K L M N<br>O P Q R S T U V W X Y Z</p>
                        <p class="lexedFont typoSize">a b c d e f g h i j k l m n<br> o p q r s t u v w x y z</p>
                        <p class="lexedFont typoSize">0 1 2 3 4 5 6 7 8 9 </p>
                    </div>
                </div>

                <!-- End Sketches -->

                <!-- Start Color Palette -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">03. Color</span><span class="title green"> Palette</span>
                        </div>
                    </div>
                    <div class="row color-palette-group">
                        <ColorSample color="#FF0073" />
                        <ColorSample color="#A7E22C" />
                        <ColorSample color="#e7db75" />
                        <ColorSample color="#78c7ba" />
                        <ColorSample color="#f8f9ff" />
                        <ColorSample color="#2a394c" />


                    </div>
                </div>
                <!-- End Color Palette -->

                <!-- Start Advertisment -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">04. Mock</span><span class="title green">ups</span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/portfolio_businesscard.jpg" alt="Social Media Advertisment">
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/mockup_portfolio.jpg" alt="Business Card Advertsiment">
                    </div>
                </div>
                <!-- End Advertisment -->

                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->
            </div>
            <WorkNavigationBar :previous-page="5" :next-page="7" :show-home-as-icon="true" @navigate="onNavigate" />
        </section>

        <!-- //BE AWARE PROJECT -->
        <section v-if="id == '7'" class="work1">
            <h2 class="hidden">Project Be Aware Campaign</h2>
            <!-- Start Hero -->
            <div class="hero work-hero beaware">
                <img class="work-hero-img" src="/assets/beaware_hero.jpg" alt="Beaware Image">
            </div>
            <!-- End Hero -->

            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>
                <!-- Start Project Description -->
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <div class="title-container">
                            <span class="title pink">Be Aware </span><span class="title green">Campaign</span>
                        </div>
                        <p>Be Aware was a public health campaign that aimed to raise awareness among teens about the
                            dangers
                            of
                            vaping. The campaign featured a powerful poster and video that used strong, vibrant colors
                            to
                            catch
                            the attention of young people. The poster depicted various parts of the body that are most
                            affected
                            by vaping, using white to represent a healthy body and black with smoke to represent a body
                            being
                            damaged by the harmful chemicals found in vape.

                        </p>
                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="col-12">
                            <span class="title small pink">Team</span>
                            <p>Nathalya Menezes<br>Tallyta Triolo</p>
                        </div>
                        <!-- End Team-->

                        <!-- Start Timeline -->
                        <div class="col-12">
                            <span class="title small pink">Timeline</span>
                            <p>3 days</p>
                        </div>
                        <!-- Start Tools-->
                        <div class="col-12">
                            <span class="title small pink">Tools</span>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <img class="tool-icon" src='/assets/icon_ae.svg' alt="Adobe After Effects Icon">
                                <img class="tool-icon" src='/assets/icon_ps.svg' alt="Adobe Photoshop Icon">
                                <img class="tool-icon" src='/assets/icon_ai.svg' alt="Adobe Illustrator Icon">
                            </div>
                        </div>
                    </div>
                    <!-- End Tools -->

                </div>

                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">01. Color</span><span class="title green"> Palette</span>
                        </div>
                    </div>
                    <div class="row color-palette-group">
                        <ColorSample color="#f8d20b" />
                        <ColorSample color="#231f20" />
                    </div>
                </div>
                <!-- End Color Palette -->

                <!-- Start Advertisment -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Ads </span><span class="title green">Campaign</span>
                        </div>
                    </div>

                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/vape_mockup.png" alt="Vape Awareness Advertisment">
                    </div>
                </div>
                <!-- End Advertisment -->

                <!-- Start Video  -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">03. Video </span><span class="title green"> Campaign</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Jc-2fRCmuds"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- End Video-->

                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->
            </div>
            <WorkNavigationBar :previous-page="6" :next-page="8" :show-home-as-icon="true" @navigate="onNavigate" />
        </section>
        <!-- END BE AWARE PROJECT  -->

        <!-- START 3D STADIUM -->
        <section v-if="id == '8'" class="work1">
            <h2 class="hidden">Project NFL Stadium</h2>
            <!-- Start Hero -->
            <div class="hero work-hero nfl">
                <img class="work-hero-img" src="/assets/sport_hero.jpg" alt="NFL Stadium">
            </div>
            <!-- End Hero -->

            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>
                <!-- Start Project Description -->
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <div class="title-container">
                            <span class="title pink">NFL </span><span class="title green">3D Stadium</span>
                        </div>
                        <p>SportsNet was a challenging 3D Stadium project that allowed me to showcase my skills in 3D design
                            and
                            animation,
                            as well as post-production and visual effects. Using Cinema 4D, I spent three months designing
                            and
                            constructing the entire scenario, creating intricate animations such as the opening and closing
                            of
                            the piston, movement of the flag, and more. After rendering the video, I took the MP4 file to
                            After
                            Effects, where I used Lumetri Color to enhance the colors and added music and lens flares to
                            create
                            a more professional look and feel.

                        </p>
                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="col-12">
                            <span class="title small pink">Team</span>
                            <p>Nathalya Menezes</p>
                        </div>
                        <!-- End Team-->

                        <!-- Start Timeline -->
                        <div class="col-12">
                            <span class="title small pink">Timeline</span>
                            <p>3 months</p>
                        </div>
                        <!-- Start Tools-->
                        <div class="col-12">
                            <span class="title small pink">Tools</span>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <img class="tool-icon" src='/assets/icon_ae.svg' alt="Adobe After Effects Icon">
                                <img class="tool-icon" src='/assets/icon_c4d.svg' alt="Cinema 4D">
                            </div>
                        </div>
                    </div>
                    <!-- End Tools -->
                </div>

                <!-- Start Room Images-->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">01. Stadium </span><span class="title green">Images</span>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/sports_frame01.jpg" alt="Piston Opening">
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/sports_frame02.jpg" alt="Team's flag">
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/sports_frame03.jpg" alt="Video Board">
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/sports_frame04.jpg" alt="Monday Night Football Sign">
                    </div>
                </div>
                <!-- End Room Images -->

                <!-- Start Video  -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Video </span><span class="title green">Campaign</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/XkYpqrBol6c"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- End Video-->

                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->

            </div>
            <WorkNavigationBar :previous-page="7" :next-page="9" :show-home-as-icon="true" @navigate="onNavigate" />
        </section>
        <!-- END 3D STADIUM -->

        <!-- START 3D ROOM -->
        <section v-if="id == '9'" class="work1">
            <h2 class="hidden">Project Industrial Style 3D Room</h2>
            <!-- Start Hero -->
            <div class="hero work-hero industrial">
                <img class="work-hero-img" src="/assets/room_hero.jpg" alt="Industrial Style 3D Room Image">
            </div>
            <!-- End Hero -->

            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>
                <div class="row mt-5 mb-5">
                    <!-- Start Project Description -->
                    <div class="col-md-6">
                        <div class="title-container">
                            <span class="title pink">Industrial Style </span><span class="title green">3D Room</span>
                        </div>
                        <p>The Industrial Style 3D Room was a research project that challenged me to create a 3D room based
                            on
                            my own
                            interior design preferences. After conducting research on various design styles and color
                            schemes, I
                            made decisions on the disposition of the furniture and other decorative elements. I then put my
                            3D
                            modeling skills to the test, creating a charming and inviting room that reflected my design
                            sensibilities. Throughout the project, I was able to put into practice everything I had learned
                            about 3D modeling, interior design, and color theory.
                        </p>
                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="col-12">
                            <span class="title small pink">Team</span>
                            <p>Nathalya Menezes</p>
                        </div>
                        <!-- End Team-->

                        <!-- Start Timeline -->
                        <div class="col-12">
                            <span class="title small pink">Timeline</span>
                            <p>3 months</p>
                        </div>
                        <!-- Start Tools-->
                        <div class="col-12">
                            <div class="title-container">
                                <span class="title small pink">Tools</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <img class="tool-icon" src='/assets/icon_c4d.svg' alt="Cinema 4D">
                            </div>
                        </div>
                    </div>
                    <!-- End Tools -->
                </div>

                <!-- Start Moodboard -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink"> 01. Mood</span><span class="title green"> Board</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/room_moodboad.png" alt="Room's MoodBoard">
                    </div>
                </div>
                <!-- End Moodboard -->

                <!-- Start Room Images-->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Room </span><span class="title green">Images</span>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/room_photo01.jpg" alt="Bed room image">
                    </div>
                    <div class="col-12 mb-3">
                        <img class="full-width" src="/assets/room_photo02.jpg" alt="Bedroom Overview">
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/room_photo03.jpg" alt="Bedroom overview">
                    </div>
                </div>
                <!-- End Room Images -->

                <!-- Start Video  -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">03. Room </span><span class="title green">Video</span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/0u99kNvqCm0"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <!-- End Video-->
                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->
            </div>
            <WorkNavigationBar :previous-page="8" :next-page="10" :show-home-as-icon="true" @navigate="onNavigate" />
        </section>
        <!-- END 3D ROOM -->

        <!-- Start Title Sequence  -->
        <section v-if="id == '10'" class="work1">
            <h2 class="hidden">Project Title Sequence</h2>
            <!-- Start Hero -->
            <div class="hero work-hero killer">
                <img class="work-hero-img" src="/assets/killer_hero.jpg" alt="Title Sequence Image">
            </div>
            <!-- End Hero -->

            <div class="row container">
                <span class="scroll-down-icon">
                    <i class="fa-solid fa-arrow-down fa-bounce"></i>
                </span>
                <!-- Start Project Description -->
                <div class="row mt-5 mb-5">
                    <div class="col-md-6">
                        <div class="title-container">
                            <span class="title pink">Title </span><span class="title green">Sequence</span>
                        </div>
                        <p>As a crime series enthusiast, I decided to create my own title sequence for the Netflix show I am
                            a
                            Killer. Using After Effects, I researched various inspirational title sequences and drew
                            inspiration
                            mostly from the title sequence used in season one. By the end of the project, I had created a
                            compelling and professional title sequence that demonstrated my skills in After Effects and
                            design.


                        </p>
                    </div>
                    <!-- End Project Description -->
                    <div class="col-md-6">
                        <!-- Start Team -->
                        <div class="col-12">
                            <span class="title small pink">Team</span>
                            <p>Nathalya Menezes</p>
                        </div>
                        <!-- End Team-->

                        <!-- Start Timeline -->
                        <div class="col-12">
                            <span class="title small pink">Timeline</span>
                            <p>3 days</p>
                        </div>

                        <!-- Start Tools-->
                        <div class="col-12">
                            <span class="title small pink">Tools</span>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <img class="tool-icon" src='/assets/icon_ae.svg' alt="Adobe After Effects">
                                <img class="tool-icon" src='/assets/icon_au.svg' alt="Adobe Audition">
                            </div>
                        </div>
                    </div>
                    <!-- End Tools -->
                </div>

                <!-- Start Styleframe -->
                <div class="row mb-5">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink"> 01. Style</span><span class="title green">frame</span>
                        </div>
                    </div>
                    <div class="col-12">
                        <img class="full-width" src="/assets/killer_styleframe.gif" alt="Title Sequence Styleframe">
                    </div>
                </div>

                <!-- End Styleframe -->

                <!-- Start Video  -->
                <div class="row mb-5 w-100">
                    <div class="col-12">
                        <div class="title-container">
                            <span class="title pink">02. Video </span>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="video-wrapper">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/svQ9_xujX5k"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <!-- End Video-->
                <!-- Start Thanks  -->
                <div class="row mb-5 thanks-row">
                    <div class="col-12 d-flex">
                        <img src="/assets/contact_me.png" alt="Memoji" class="m-auto img-thanks">
                    </div>
                    <div class="col-12 thanks mt-3">
                        <span class="row highlight">Thanks for journeying through my project!</span>
                        <span class="row normal"> If you’re ready to take the next step, let’s make something great
                            together</span>
                    </div>
                    <div class="col-12 thanks d-flex mt-5">
                        <div class="m-auto"><b-button class="justify-content-center" @click="showModal">YEAH!</b-button>
                        </div>
                    </div>
                </div>
                <!-- End Thanks  -->
                <!-- End Title Sequence  -->
            </div>
            <WorkNavigationBar :previous-page="9" :next-page="1" :show-home-as-icon="true" @navigate="onNavigate" />
        </section>
        <b-modal ref="my-modal" hide-footer title="&lt;contact me&gt;" content-class="modal-content-custom"
            header-border-variant="success">
            <ContactMeSection :hide-social="true" />
        </b-modal>
    </main>
</template>
<style lang="scss" scoped>
main {

    // quatro Hero
    .hero.work-hero {

        .work-hero-img {
            height: 100%;
            width: 100%;
        }

        .work-hero-img-hockey {
            height: 100%;
            width: 100%;
        }

        .work-hero-img-ceci {
            height: 100%;
            width: 100%;
        }

        .work-hero-img-banting {
            height: 100%;
            width: 100%;
        }

        .work-hero-img-room {
            height: 100%;
            width: 100%;
        }

        &.quatro {
            background-image: url(/assets/quatro_hero.jpg);
        }

        &.hockey {
            background-image: url(/assets/hockey_hero.jpg);
        }

        &.banting {
            background-image: url(/assets/banting_hero.jpg);
        }

        &.ceci {
            background-image: url(/assets/ceci_hero.jpg);
        }

        &.demo-reel {
            background-image: url(/assets/demoReel_hero.jpg);
        }

        &.beaware {
            background-image: url(/assets/beaware_hero.jpg);
        }

        &.portfolio-site {
            background-image: url(/assets/portfolio_hero.jpg);
        }

        &.nfl {
            background-image: url(/assets/sport_hero.jpg);
        }

        &.industrial {
            background-image: url(/assets/room_hero.jpg);
        }

        &.killer {
            background-image: url(/assets/killer_hero.jpg);
        }

        @include tablet {
            height: 100vh;
            width: 100vw;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;

            .work-hero-img {
                display: none;
            }
        }

        .portfolio {
            .quatro {
                @include tablet {
                    height: 100vh;
                    width: 100vw;
                    background-size: cover;
                    background-repeat: no-repeat;
                    background-image: url(/assets/portfolio_hero.png);
                    background-attachment: fixed;

                    .work-hero-img {
                        display: none;
                    }
                }
            }
        }


    }

    section {
        margin: 0px;
    }

    p {
        color: $white;
        font-family: $font-lexend;
        font-weight: 500;
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
            font-size: 2.0rem;
            margin-bottom: 10px;

            @include tablet {
                font-size: 2.5em;
            }

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

        .twTitle {
            color: $pink;
            font-weight: bold;
            font-size: 2em;
        }

        .tw-font {
            font-family: 'fontscorecomttwcenmt' !important;
        }


    }

    .projects-navbar {
        z-index: 101;

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

    .thanks-row {
        width: unset;

        @include tablet {
            width: 100%;
        }
    }

    .thanks {

        span {
            text-align: center;
            display: block;
            margin-bottom: 0px;

            &.highlight {
                color: $pink;
                font-weight: bold;
                font-size: 1.5em;

                @include tablet {
                    font-size: 2em;
                }
            }

            &.normal {
                color: $white;
                font-weight: bold;
                font-size: 1.2em;

                @include tablet {
                    font-size: 1.5em;
                }
            }
        }

        .btn {
            font-weight: 600;
        }
    }

    .exoFontLight {
        font-family: 'Exo 2', sans-serif;
        font-weight: 400;
    }


    .exoFontBold {
        font-family: 'Exo 2', sans-serif;
        font-weight: bold;
    }



    .robotoFontR {
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }

    .robotoTitle {
        color: $pink;
        font-size: 2em;
    }

    .openFontR {
        font-family: 'Open Sans', sans-serif;
        font-weight: 400;

    }

    .openFontB {
        font-family: 'Open Sans', sans-serif;
        font-weight: 800;

    }

    .openTitle {
        color: $pink;
    }

    .velvetFont {
        font-family: 'Red Velvet', sans-serif;
    }

    .niramitFont {
        font-family: 'Niramit', sans-serif;
        font-weight: 400;
    }

    .chakraFont {
        font-family: $font-headings;
    }

    .lexedFont {
        font-family: $font-lexend;

    }

    .loraFont {
        font-family: $font-body;
    }

    .carousel {

        @include desktop {
            width: 100vw;
        }
    }

    .title-container {
        margin-bottom: 10px;
    }

    .process-cards,
    .color-palette-group {
        padding-right: 15px;
        padding-left: 15px;
    }

    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 */
        padding-top: 25px;
        height: 0;

        iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
    }

    .scroll-down-icon {
        display: none;
        margin: auto;

        @include tablet {
            display: flex;
        }

        svg {
            font-size: 2rem;
            color: white;
            margin-top: -50px;
        }
    }

    img {
        &.full-width {
            box-shadow: rgba(0, 0, 0, 0.35) 5px 5px 15px;


        }
    }

    .img-thanks,
    iframe {
        box-shadow: rgba(0, 0, 0, 0.35) 5px 5px 15px;
    }

    .float {
        display: flex;
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        left: 40px;
        background-color: $pink;
        color: $white;
        border-radius: 50px;
        text-align: center;
        transition: all ease-in-out .3s;
        z-index: 100;
        opacity: .5;

        svg {
            margin: auto;
        }

        &:hover {
            -webkit-box-shadow: 0px 0px 20px 2px $color-button-primary;
            box-shadow: 0px 0px 20px 2px $color-button-primary;
            opacity: 1;
        }
    }


}

.modal-content-custom {
    background-color: $color-bg;
}
</style>
