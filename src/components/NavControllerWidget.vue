<template>
    <section id="navigation-section">
        <h2 class="hidden">Navigation Menu</h2>
        <div class="navigation-container">
            <ul>
                <!--TODO: Add links to the list items, and hook javascript events to navigation actions-->
                <li class="square intro-nav rotated selected" data-anchor=".intro-anchor"></li>
                <li class="square about-nav" data-anchor=".about-anchor"></li>
                <li class="square skills-nav" data-anchor=".skills-anchor"></li>
                <li class="square my-work-nav" data-anchor=".my-work-anchor"></li>
                <li class="square contact-nav" data-anchor=".contact-anchor"></li>
            </ul>
            <div class="vertical-line"></div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'NavControllerWidget'
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

            .vertical-line {
                // border-left: 1px solid;
                // border-right: 1px solid;
                // width: 50%;
            }
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