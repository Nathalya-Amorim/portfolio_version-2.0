<template>
    <section class="about-anchor about-section">
        <div class="row">
            <div class="col-md-8 center-block" data-aos="fade-right" data-aos-ease="ease-in-out" data-aos-duration="300"
                data-aos-delay="200">
                <h3 class="about-title mb-30">&lt;about&gt;</h3>

                <p class="p-about mb-20">Hello there! You stumbled upon me!<br></p>
                <p class="p-about mb-20 mr-3">I’m <span class="span-pink">Nathalya</span>, a <span class="span-green">UX/UI
                        Web
                        Designer</span>, with a passion for creating digital experiences! I hail from Brazil, but I'm
                    currently living in London, where I spend my days obsessing over <span class="span-yellow">fonts</span>,
                    <span class="span-pink">colors</span>, and
                    <span class="span-green">pixels-perfect designs</span>.<br>

                </p>
                <p class="p-about mb-20 mr-3">My <span class="span-green">design process</span> always starts with a deep
                    understanding of the <span class="span-yellow">target
                        audience</span>, which I gain through intense meditation and telepathy (okay, maybe just user
                    research). Then,
                    armed with a pencil and a giant eraser, I start sketching out <span class="span-pink">wireframes</span>
                    and <span class="span-green">layouts</span> until I find the
                    perfect design.<br>
                </p>
                <p class="secondParagraph mr-3"> When it comes to <span class="span-yellow">collaboration</span>, I'm always
                    down
                    for a good <span class="span-green">brainstorming</span>
                    session, as long as there's coffee involved. And don't worry, I won't judge you if you don't know the
                    difference between serif and sans-serif fonts (hint: one has little feet). <br></p>

                <p class="p-about mr-3"> I'm excited to
                    bring my <span class="span-pink">UX/UI expertise</span> to the table and help create experiences that
                    delight and <span class="span-yellow">engage users</span>. And if
                    you're looking for someone who's skilled in the art of emoji usage, look no further! I've got a PhD in
                    &#x1F60E;&#x1F44C;&#x1F3FC;.
                    <br>
                </p>


            </div>
            <div class="" data-aos="fade-left" data-aos-ease="ease-in-out" data-aos-duration="300" data-aos-delay="200">
                <div class="about-picture">
                    <div class="translated-border">
                    </div>
                    <b-img class="img-fluid" src=../../img/profile_desktop2.png></b-img>
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
    font-weight: 500;

}

.about-title {
    font-size: 2.5em;
    color: rgb(167, 226, 44);

    &.mb-30 {
        margin-bottom: 30px;
    }
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
        margin-top: 90px;
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
    color: $color-heading-secondary;
    font-weight: bold;
}

.p-about {
    font-family: $font-lexend;
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

.secondParagraph {
    font-family: $font-lexend;
    font-weight: 500;
}

.profile-pic {
    width: 100%;
    height: 100%;

}
</style>