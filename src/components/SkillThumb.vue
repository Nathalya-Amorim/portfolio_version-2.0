<template>
    <span><img :src='skill["skill_icon"]' :alt="skill['skill_title']"></span>
</template>

<script>
export default {
    name: "SkillThumb",
    props: {
        skill: Object
    }
}
</script>

<style lang="scss">

</style>