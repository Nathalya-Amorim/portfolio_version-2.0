<template>
    <section class="my-work my-work-anchor">
        <h2 class="hidden">Portfolio Section</h2>

        <h3>&lt;my work&gt;</h3>

        <div class="work-container">
            <WorkThumb v-for="work in worksData" :work="work" @load-light-box-data="loadLightBoxData" v-bind:key="work.id">
            </WorkThumb>
            <LightBox v-if="showLightBox" :work="workLightBoxData" @close-light-box="showLightBox = false"></LightBox>
        </div>


    </section>
</template>

<script>
// import axios from 'axios';
// import api from '../services/api.js'
import LightBox from './LightBox.vue';
import WorkThumb from './WorkThumb.vue';
import projects from '../../projects.json';

export default {
    name: "MyWorkSection",
    components: { LightBox, WorkThumb },
    data() {
        return {
            worksData: {},
            workLightBoxData: {},
            showLightBox: false
        }
    },
    created() {
        // axios.get('http://localhost:3000/projects')
        //     .then(res => {
        //         console.log(res);
        //         this.worksData = res.data;
        //     })
        //     .catch(err => console.log("ERROR: Could not load works data. [ " + err) + " ]");
        this.worksData = projects;
    },
    methods: {
        loadLightBoxData(work) {
            this.workLightBoxData = work;
            this.showLightBox = true;
        }
    }

}
</script>


<style lang="scss">
.my-work {
    h3 {
        width: 100%;
    }

    .work-picture {
        margin: auto;
        position: relative;
        margin-top: 30px;
        margin-bottom: 50px;
        cursor: pointer;

        @include tablet {
            // width: calc(50%);
        }

        picture {
            position: relative;
        }
    }

    .work-picture:hover .translated-border {
        margin: 20px;
        -webkit-box-shadow: 0px 0px 20px 2px $color-button-primary;
        box-shadow: 0px 0px 20px 2px $color-button-primary;
    }

    .work-picture:hover .work-picture-overlay {
        @include picture-overlay;
    }

    .work-picture-overlay {

        opacity: 0;
    }

    .work-title {
        font-family: $font-headings;
        position: absolute;
        opacity: 0;
        width: 100%;
        bottom: 45%;
        font-weight: bold;
        font-size: 1.7em;
        color: $white;
        background-color: rgb(249, 37, 114, 1);
        padding: 10px;
        transition: all ease-in-out 0.3s;
        text-align: center;
        z-index: 5;

    }



    .work-picture:hover .work-title {
        opacity: 1;
        transition: all ease-in-out 0.3s;
    }

    .work-container {
        display: grid;
        grid-template-columns: 1fr;
        column-gap: 40px;
        row-gap: 40px;
        margin: auto;

        @include tablet {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .translated-border {
        @include translated-border;
    }

    .translated-border-green {
        @include translated-border($green);
    }

    .translated-border-yellow {
        @include translated-border($yellow);
    }
}

.light-box {

    position: fixed;
    left: 50%;
    top: 50%;
    margin: -1px;
    width: 100vw;
    height: 100vh;
    background-color: rgba(0, 0, 0, 0.9);
    z-index: 1000;
    overflow: auto;

    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -webkit-transform: translate(-50%, -50%);

    .ligth-box-container {
        @include tablet {
            width: 1080px;
            height: 700px;
        }

        width: 100%;
        height: 100%;
        padding: 25px;
        margin: auto;
        display: inline;
        overflow: auto;
        border-radius: 15px;
        background-image: linear-gradient(180deg, #293849, #293849, #36596c, #447c8b);

        .close-btn {
            float: right;
            font-size: 1.5em;
            color: $white;

            :hover {
                color: $pink;
            }
        }

        .ligth-box-body {
            display: flex;
            flex-direction: column;
            row-gap: 40px;

            @include tablet {
                display: flex;
                flex-direction: row;
                row-gap: 40px;
                column-gap: 20px;
            }

            .translated-border {
                @include translated-border($width: calc(100vw - 50px), $height: 100%);

                @include tablet {
                    @include translated-border();
                }
            }

            .light-box-pic {
                margin: auto;
                position: relative;
                margin-top: 30px;
                margin-bottom: 30px;

                @include tablet {
                    width: 523px;
                    height: 340px;
                }

                img {
                    width: calc(100vw - 50px);

                    @include tablet {
                        width: auto;
                    }

                    position: relative;
                }
            }

            .light-box-content {
                margin-top: 30px;
                margin-bottom: 30px;

                h3 {
                    font-size: 1.5em;
                    margin: 15px;
                }

                p {
                    margin: 10px 0 10px 15px;
                    line-height: 1.7em;
                }
            }
        }

        .light-box-title {
            color: $color-font-secondary;
            font-family: $font-headings;
            font-size: 1.6em;
            padding-top: 20px;
            display: flex;
            justify-content: center;

            @include tablet {
                font-size: 1.8em;
            }
        }

        .light-box-actions {
            display: flex;

            a {
                margin: auto;
                text-decoration: none;
                padding: 10px;
            }
        }
    }
}
</style>