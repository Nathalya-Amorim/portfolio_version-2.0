<template>
    <section class="flex-skills skills-anchor">
        <h2 class="hidden">Skill Section</h2>

        <h3>&lt;skills&gt;</h3>
        <div class="skills-thumbs-container">
            <SkillThumb v-for="skill in skillsData" :skill="skill" v-bind:key="skill.id"></SkillThumb>
        </div>
        <h3>&lt;/skills&gt;</h3>

    </section>
</template>

<script>
import SkillThumb from './SkillThumb.vue';
import api from "../services/api.js";

export default {
    name: "SkillsSection",
    components: { SkillThumb },
    data() {
        return {
            skillsData: {}
        }
    },
    created() {
        api.getSkills()
            .then(data => { this.skillsData = data })
            .catch(err => console.log("ERROR: Could not load skills data. [ " + err) + " ]");
    }
}
</script>


<style lang="scss">
.flex-skills {

    // flex-direction: column;
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

        @include tablet {
            grid-template-columns: repeat(5, 1fr);
        }
    }

}
</style>