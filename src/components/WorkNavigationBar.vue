<template>
    <div class="row container-fluid projects-navbar m-0 p-0 mt-5">
        <div v-if="showHomeAsButton == true" class="col-12 col-md-6 nav-button bg-color-pink d-flex btn-home"
            @click="goHome()">
            <span><i class="fa-solid fa-arrow-left"></i> Home</span>
        </div>

        <div v-if="showHomeAsIcon == true" class="col-12 col-md-6 nav-button bg-color-lime-green d-flex btn-back"
            @click="goTo(previousPage)">
            <span><i class="fa-solid fa-arrow-left"></i> Back</span>
        </div>

        <div v-if="showHomeAsIcon == true" class="home-icon bg-color-pink" @click="goHome()">
            <span><i class="fa-solid fa-house"></i></span>
        </div>

        <div v-if="showHomeAsIcon == true" class="col-12 col-md-6 nav-button bg-color-pink d-flex btn-home home-icon-mobile"
            @click="goHome()">
            <span><i class="fa-solid fa-house"></i></span>
        </div>

        <div class="col-12 col-md-6 nav-button bg-color-lime-green d-flex btn-next" @click="goTo(nextPage)">
            <span>Next <i class="fa-solid fa-arrow-right"></i></span>
        </div>
    </div>
</template>

<script>
export default {
    name: "WorkNavigationBar",
    props: {
        nextPage: Number,
        previousPage: Number,
        showHomeAsButton: {
            type: Boolean,
            default: false
        },
        showHomeAsIcon: {
            type: Boolean,
            default: false
        },
    }, methods: {
        goTo(event) {
            this.$emit('navigate', event);
        },

        goHome() {
            this.$router.push('/');
        }
    },
    emits: ['navigate']

}
</script>

<style lang="scss" >
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

        &.bg-color-green {
            background-color: $green;

            &:hover {
                background-color: $lime-green;
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

    .home-icon {
        margin: 0;
        position: absolute;
        height: 100px;
        width: 70px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
        cursor: pointer;
        transition: all ease-in-out .3s;
        display: none;

        @include tablet {
            // font-size: 2em;
            width: 100px;
            display: flex;
        }

        span {
            z-index: 10;
            height: 100%;
            text-align: center;
            display: flex;

            svg {
                margin: auto;
            }
        }

        &.bg-color-pink {
            background-color: $pink;
        }

        &:hover {
            -webkit-box-shadow: 0px 0px 20px 2px rgb(249 37 114) !important;
            box-shadow: 0px 0px 20px 2px rgb(249 37 114) !important;
        }
    }

    .btn-home.home-icon-mobile {
        @include tablet {
            display: none !important;
        }
    }
}
</style>