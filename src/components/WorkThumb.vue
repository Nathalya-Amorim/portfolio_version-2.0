<!-- export default {
    name: "workthumb",

    emits: ['load-light-box-data'],

    props: {
        work: Object
    },

    template: 
    `
    <div class="work-picture" @click="onWorkSelected">
        <div class="translated-border">
        </div>
        <div class="work-picture-overlay">
        </div>
        <picture class="flex-center picture-filter">
            <source media="(min-width:740px)" :srcset="work['project_thumb_img']">
            <source media="(min-width:480px)" :srcset="work['project_thumb_img']">
            <img class="profile-pic" :src="work['project_thumb_img']" :alt='work["project_name"]'>
        </picture>
            <span class="work-title">{{work['project_name']}}</span>
    </div>
    `,

    methods: {
        onWorkSelected() {
            this.$emit('load-light-box-data', this.work);
        }
    }

} -->


<template>
    <div class="work-picture" @click="onWorkSelected">
        <div class="translated-border">
        </div>
        <div class="work-picture-overlay">
        </div>
        <picture class="flex-center picture-filter">
            <source media="(min-width:740px)" :srcset="work['project_thumb_img']">
            <source media="(min-width:480px)" :srcset="work['project_thumb_img']">
            <img class="profile-pic" :src="work['project_thumb_img']" :alt='work["project_name"]'>
        </picture>
        <span class="work-title">{{ work['project_name'] }}</span>
    </div>
</template>

<script>
export default {
    name: "WorkThumb",

    emits: ['load-light-box-data'],

    props: {
        work: Object
    },
    methods: {
        onWorkSelected() {
            this.$emit('load-light-box-data', this.work);
        }
    }
}
</script>

<style lang="scss">

</style>
