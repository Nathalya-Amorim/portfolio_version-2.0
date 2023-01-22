<template>
    <header class="row">
        <!-- <b-navbar toggleable="true" type="dark">
            <b-navbar-brand href="#">
                <img class="logo" src="../../img/logo-svg.svg" alt="Nathalya's Logo" />
            </b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <b-navbar-nav>
                    <b-nav-item>This is a &#127828; menu </b-nav-item>
                    <b-nav-item>&#129472;</b-nav-item>
                    <b-nav-item>&#129363;</b-nav-item>
                    <b-nav-item>&#129370;</b-nav-item>
                    <b-nav-item>&#129367;</b-nav-item>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar> -->
        <div class="col-md-6 col-sm-6">
            <h1 class="hidden">Nathalya Menezes - Portfolio</h1>
            <img class="logo" src="../../img/logo-svg.svg" alt="Nathalya's Logo" width="25%">
        </div>
        <!-- START NAVIGATION MENU -->
        <nav class="col-md-6 col-sm-6">
            <h2 class="hidden"> Mobile Navigation Menu </h2>
            <div>
                <input type="checkbox" id="overlay-input" />
                <label for="overlay-input" id="overlay-button"><span></span></label>

                <div id="overlay">
                    <div>
                        <span>This is a &#127828; menu </span>
                        <span>&#129472;</span>
                        <span>&#129363;</span>
                        <span>&#129370;</span>
                        <span>&#129367;</span>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: 'NavSection'
}
</script>


<style lang="scss">
// nav {
//     width: 100%;
//     background-color: $color-bg !important;
// }

// .logo {
//     width: 100px;
// }

// START NAVIGATION MENU

/* Starts Mobile Overlay Menu */
.navbar {
    // display: none;
    float: right;
}

#overlay-button {
    position: absolute;
    right: 1em;
    padding: 26px 11px;
    z-index: 20;
    cursor: pointer;
    user-select: none;
}

#overlay-button span {
    height: 3px;
    width: 30px;
    border-radius: 2px;
    background-color: $pink;
    position: relative;
    display: block;
    transition: all 0.2s ease-in-out;
}

#overlay-button span:before {
    top: -10px;
    visibility: visible;
}

#overlay-button span:after {
    top: 10px;
}

#overlay-button span:before,
#overlay-button span:after {
    height: 3px;
    width: 30px;
    border-radius: 2px;
    background-color: $green;
    position: absolute;
    content: "";
    transition: all 0.2s ease-in-out;
}

#overlay-button:hover span {
    background: $green;
}

#overlay-button:hover span:before,
#overlay-button:hover span:after {
    background: $pink;
}

input[type=checkbox] {
    display: none;
}

input[type=checkbox]:checked~#overlay {
    visibility: visible;
}

input[type=checkbox]:checked~#body {
    overflow: hidden;
}

input[type=checkbox]:checked~#overlay-button:hover span,
input[type=checkbox]:checked~#overlay-button span {
    background: transparent;
}

input[type=checkbox]:checked~#overlay-button span:before {
    transform: rotate(45deg) translate(7px, 7px);
    opacity: 1;
    background: $color-bg;
}

input[type=checkbox]:checked~#overlay-button span:after {
    transform: rotate(-45deg) translate(7px, -7px);
    background: $color-bg;
}

#overlay {
    height: 100vh;
    width: 100vw;
    background: $green;
    z-index: 19;
    visibility: hidden;
    position: fixed;
    top: 0;
    left: 0;
    /* This fixes scrolling issue */
    overflow: hidden;
}

#overlay {

    ul,
    div {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        height: 100vh;
        padding-left: 0;
        list-style-type: none;

        span {
            margin: 20px;
        }
    }
}

#overlay ul li {
    padding: .75em;
}

#overlay ul li a {
    color: $color-bg;
    text-decoration: none;
    font-size: 1.25em;
}

#overlay div {
    color: $color-bg;
    text-decoration: none;
    font-size: 2.25em;
    margin: auto;
}

#overlay ul li a:hover {
    color: $pink;
}

// END NAVIGATION MENU

.intro-section {
    display: flex;
    flex-direction: column;

    @include desktop {
        // flex-direction: row;

    }
}

#social-section {
    display: none;

    @include desktop {
        display: block;
        position: sticky;

    }
}

.image-position {
    display: flex;
    justify-content: center;
    height: auto;

    img {

        @include desktop {
            width: 95%;
            height: auto;
        }
    }
}

.logo {
    width: 25%;

    @include tablet {
        width: 5%;
        min-width: 80px;
    }

    @include desktop {
        margin-left: 50px;
    }
}
</style>