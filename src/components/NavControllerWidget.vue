<template>
    <section id="navigation-section">
        <h2 class="hidden">Navigation Menu</h2>
        <div class="navigation-container">
            <ul>
                <!--TODO: Add links to the list items, and hook javascript events to navigation actions-->
                <li class="square intro-nav rotated selected" ref="intro-anchor" @click="navigateTo('intro-anchor')">
                </li>
                <li class="square about-nav" ref="about-anchor" @click="navigateTo('about-anchor')"></li>
                <li class="square skills-nav" ref="skills-anchor" @click="navigateTo('skills-anchor')"></li>
                <li class="square my-work-nav" ref="my-work-anchor" @click="navigateTo('my-work-anchor')">
                </li>
                <li class="square contact-nav" ref="contact-anchor" @click="navigateTo('contact-anchor')">
                </li>
            </ul>
            <div class="vertical-line"></div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'NavControllerWidget',
    methods: {
        navigateTo(anchor) {
            const element = this.$root.$el.getElementsByClassName(anchor)[0];
            if (element) {
                this.resetNavs();
                this.$refs[anchor].classList.add('rotated');
                this.$refs[anchor].classList.add('selected');
                element.scrollIntoView({ behavior: 'smooth' });
            }
        },

        resetNavs() {
            let navs = Array.from(this.$el.getElementsByClassName("square"));
            console.log(navs);
            navs.forEach(nav => {
                nav.classList.remove("selected");
                nav.classList.remove("rotated");
            });
        }
    }
}
</script>

<style lang="scss">
#navigation-section {
    display: block;

    ul {
        list-style: none;
    }

    @include desktop {
        position: fixed;
        z-index: 10;
        bottom: -40px;
        right: 10px;

        .navigation-container {
            border-right: 2px solid $white;
            width: 85%;


        }

        .square {
            height: 15px;
            width: 15px;
            margin: 50px auto 50px auto;
            background-color: $green;
            transform: rotate(45deg);
            transition: all ease-in-out .3s;
            cursor: pointer;
        }

        .square.rotated {
            transform: rotate(180deg);
        }

        .square.rotated.selected {
            // height: 22px;
            // width: 22px;
            background-color: $pink;
            // border: 1px solid $pink;
        }
    }
}

// .about-picture picture::after {
//     content: '';
//     display: block;
//     position: relative;
//     width: 100%;
//     height: 100%;
//     border: 1px solid $pink;
//     transform: traslate( 10px);
// }
</style>