<template>
    <div class="process-card">
        <img :src='imageSrc' :alt='"Card " + type'>
        <span>{{ title }}</span>
    </div>
</template>

<script>

export default {
    name: "ProcessCard",
    props: {
        title: String,
        type: String
    },
    methods: {

    },
    computed: {
        imageSrc() {
            return new URL('/assets/card_' + this.type + '.svg', import.meta.url).href;
        }
    }
}
</script>

<style lang="scss" scoped>
.process-card {
    display: flex;
    flex-direction: column;
    height: 150px;
    width: 150px;
    border: 0px;
    border-radius: 30px;
    margin: 10px;
    background-color: transparent;
    border: 3px solid $pink;
    padding: 10px;
    box-shadow: rgba(0, 0, 0, 0.35) 5px 5px 15px;


    span {
        width: 100%;
        align-self: center;
        text-align: center;
        font-weight: bold;
        transition: all ease-in-out .2s;
        color: $pink;
        text-transform: uppercase;
        font-size: 1.3em;
    }

    img {
        width: 85%;
        margin: auto;
    }
}
</style>