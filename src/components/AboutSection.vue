<template>
    <section class="about-anchor about-section">
        <div class="row">
            <div class="col-md-6 center-block" data-aos="fade-right" data-aos-ease="ease" data-aos-duration="500"
                data-aos-delay="500">
                <h3 class="about-title mb-30">&lt;about&gt;</h3>

                <p class="p-about mb-20">Hello there! You stumbled upon me!<br></p>
                <p class="p-about mb-20">I’m <span class="span-pink">Nathalya Menezes</span>, a <span
                        class="span-green">Front-End Developer</span>, and <span class="span-yellow"> Web
                        Designer</span>
                    currently residing in London, but hailing from Brazil.
                </p>
                <p class="p-about mb-20"> From the world of <span class="span-yellow">JavaScript</span>, <span
                        class="span-pink">HTML</span> and <span class="span-green">CSS</span>, I love exploring new
                    frontiers and pushing the limits of what's possible. The love for creation led me to persue a career
                    in the tech industry, starting with a basic <span class="span-pink">HTML</span> course on Udemy and
                    later enrolling in <span class="span-yellow">Interactive Media Design</span> program at <span
                        class="span-green">
                        Fanshawe College</span>,
                    <br>
                </p>
                <p> The journey hasnt's been without challenges, but the thrill of overcoming obstacles and continuously
                    improving my crafts keeps me motivated and inspired. That's why I am so passionate about my career
                    and my hobby as <span class="span-pink">Motion Designer</span> and <span
                        class="span-yellow">3D</span> enthusiast</p>

                <p class="p-about">So, that's a little about me and my journey into the exciting world of
                    technology.<br></p>

                <h3 class="about-title">&lt;about&gt;</h3>
            </div>
            <div class="" data-aos="fade-right" data-aos-ease="ease" data-aos-duration="500" data-aos-delay="500">
                <div class="about-picture">
                    <div class="translated-border">
                    </div>
                    <b-img class="img-fluid" src=../../img/profile_desktop.jpg></b-img>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'AboutSection'
}
</script>


<style lang="scss">
.p-about {
    line-height: 1.5em;
    font-family: 'Chakra Petch', sans-serif;

}

.about-title {
    font-size: 2.5em;
    color: rgb(231, 219, 117);
}


.profilePosition {
    margin-top: 70px;
}

.about-section {
    display: flex;
    flex-direction: column;

    @include desktop {
        flex-direction: row;
    }

    h3 {
        width: 100%;
    }

    .about-text {
        padding-left: 20px;

        @include desktop {
            padding-left: 50px;
            width: 50%;
        }
    }

    .about-picture {
        margin: auto;
        position: relative;
        margin-top: 30px;
        margin-bottom: 50px;

        // @include desktop {
        //     width: calc(50%);
        // }

        picture {
            position: relative;
        }


    }

    .about-picture:hover .translated-border {
        margin: 20px;
        -webkit-box-shadow: 0px 0px 20px 2px $color-button-primary;
        box-shadow: 0px 0px 20px 2px $color-button-primary;
    }

    .about-picture:hover .picture-overlay {
        opacity: 0;
    }

    .about-skills {
        @include tablet {
            margin-left: 50px;
            width: 100%;
        }
    }

    .picture-overlay {
        @include picture-overlay;
    }

    .translated-border {
        @include translated-border;
    }
}

.about-title {
    color: $color-font-secondary;
}

.p-about {
    font-family: $font-body;
    line-height: 1.7em;
}

.span-yellow {
    color: $color-font-secondary;
    font-weight: bolder;
}

.span-green {
    color: $color-heading-secondary;
    font-weight: bolder;
}

.span-pink {
    color: $color-heading-primary;
    font-weight: bolder;
}

.tech-list li {
    list-style-type: "\21E2";
    padding: 10px;


}

.profile-pic {
    width: 100%;
    height: 100%;

}
</style>