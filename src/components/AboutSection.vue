<template>
    <section>
        <div class="row">
            <div class="col-md-6 center-block">
                <h3 class="about-title mb-30">&lt;about&gt;</h3>

                <p class="p-about mb-20">Hello! You found me!<br></p>
                <p class="p-about mb-20">I’m <span class="span-pink">Nathalya Menezes</span>, a <span
                        class="span-green">Front-End Developer</span> and <span class="span-yellow">Motion
                        Designer</span> from Brazil but currently based in London; passionate about creating and
                    discovering new things in <span class="span-green">3D</span> <span
                        class="span-yellow">JavaScript</span>, <span class="span-pink">HTML </span> and<span
                        class="span-green"> CSS</span>.<br></p>
                <p class="p-about mb-20"> How did I get into tech? Understanding technology and learning new things
                    related to the web have always been a hobby. Naturally, tech was a perfect place for me; it is where
                    I’ve decided to start my new career.<br></p>
                <p class="p-about"> Initially, I had no idea what I was doing, but I dived right in. I began with an
                    <span class="span-pink">HTML</span> short course at Udemy; then, I took a more significant step by
                    studying <span class="span-green">Interactive Media Design</span> at <span
                        class="span-yellow">Fanshawe College</span>.<br>
                </p>
                <p class="p-about"> I must admit that studying technology is not always a pleasure and requires much
                    commitment, and facing constant challenges is tough. But I will also say that seeing me overcome
                    obstacles and learn and debate solutions is exciting and motivating.<br></p>

                <h3 class="about-title">&lt;about&gt;</h3>
            </div>
            <div class="col-md-6 center-block">
                <b-img class="img-fluid" src=../../img/profile_desktop.jpg></b-img>
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

        @include desktop {
            width: calc(50%);
        }

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