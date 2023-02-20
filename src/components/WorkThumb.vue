<template>
    <router-link :to="'/work/' + work.project_id">
        <div class="work-picture" @click="onWorkSelected" :data-aos="work.project_id % 2 === 0 ? 'fade-left' : 'fade-right'"
            data-aos-ease="ease" data-aos-duration="500" data-aos-delay="500">
            <div class="translated-border">
            </div>
            <span class="work-title">{{ work['project_name'] }}</span>
            <div class="work-picture-overlay">
            </div>
            <picture class="flex-center picture-filter">
                <source media="(min-width:740px)" :srcset="work['project_thumb_img']">
                <source media="(min-width:480px)" :srcset="work['project_thumb_img']">
                <img class="profile-pic" :src="work['project_thumb_img']" :alt='work["project_name"]'>
            </picture>
        </div>
    </router-link>
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

<style lang="scss"></style>
