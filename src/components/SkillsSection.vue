<template>
    <section class="flex-skills skills-anchor" data-aos="fade-left" data-aos-ease="ease-in-out" data-aos-duration="300"
        data-aos-delay="200">
        <h2 class="hidden">Skill Section</h2>

        <h3>&lt;skills&gt;</h3>
        <div class="skills-thumbs-container">
            <SkillThumb v-for="skill in skillsData" :skill="skill" v-bind:key="skill.id"></SkillThumb>
        </div>


    </section>
</template>

<script>
import SkillThumb from './SkillThumb.vue';
// import api from "../services/api.js";
// import axios from "axios";
import skills from "../../skills.json";

export default {
    name: "SkillsSection",
    components: { SkillThumb },
    data() {
        return {
            skillsData: []
        }
    },
    created() {
        // axios.get('http://localhost:3000/skills')
        //     .then(res => {
        //         console.log(res);
        //         this.skillsData = res.data;
        //     })
        //     .catch(err => console.log("ERROR: Could not load skills data. [ " + err) + " ]");
        this.skillsData = skills;
    }
}
</script>


<style lang="scss">
.flex-skills {

    display: flex;

    h3 {
        width: 100%;
    }

    span {
        margin: 10px;
    }

    img {
        height: 50px;
        width: 50px;

        @include tablet {
            height: 75px;
            width: 75px;
        }
    }

    .skills-thumbs-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 40px;
        row-gap: 40px;
        margin: auto;
        padding-left: 50px;
        padding-right: 50px;

        @include tablet {
            grid-template-columns: repeat(5, 1fr);
        }
    }

}
</style>