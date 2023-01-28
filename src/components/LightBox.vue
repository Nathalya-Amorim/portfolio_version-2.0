<template>
    <section class="light-box">
        <div class="ligth-box-container">
            <div class="ligth-box-header">
                <span class="close-btn" @click="onClose"><i class="fa-solid fa-xmark"></i></span>
                <div class="light-box-title">&lt;{{ work['project_name']}}&gt;</div>
            </div>
            <div class="ligth-box-body">
                <div class="light-box-pic">
                    <div class="translated-border">
                    </div>
                    <img :src="work['project_img']" :alt='work["project_name"]'>
                </div>
                <div class="light-box-content">
                    <h3>&lt;Overview&gt;</h3>
                    <p>{{ work['project_overview']}}</p>
                    <h3>&lt;Tools&gt;</h3>
                    <p>{{ work['project_tools']}}</p>
                    <h3>&lt;Date&gt;</h3>
                    <p>{{ work['project_date']}}</p>
                </div>
            </div>
            <div class="light-box-actions">
                <a class="btn light-box-btn" :href="work['project_live_url']" target="_blank"
                    rel="noopener noreferrer">See it live</a>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "LightBox",
    props: ['work'],
    emits: ['close-light-box'],
    methods: {
        onClose() {
            this.$emit('close-light-box')
        }
    }
}
</script>

<style lang="scss">

</style>