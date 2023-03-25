<template>
    <div class="row container-fluid projects-navbar m-0 p-0 mt-5">
        <div v-if="showHomeAsButton == true" class="col-6 nav-button bg-color-pink d-flex" @click="goHome()">
            <span class="">Back to home</span>
        </div>
        <div v-if="showHomeAsIcon == true" class="col-6 nav-button bg-color-lime-green d-flex" @click="goTo(previousPage)">
            <span>Previous project</span>
        </div>
        <div v-if="showHomeAsIcon == true" class="home-icon bg-color-pink" @click="goHome()">
            <span><i class="fa-solid fa-house"></i></span>
        </div>
        <div class="col-6 nav-button bg-color-lime-green d-flex" @click="goTo(nextPage)">
            <span>Next project</span>
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
        width: 100px;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 10;
        display: flex;
        cursor: pointer;
        transition: all ease-in-out .3s;

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
}
</style>