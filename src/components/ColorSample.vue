<template>
    <div class="color-palette" :style="'background-color: ' + color + ';'">
        <span>{{ color }}</span>
    </div>
</template>

<script>
export default {
    name: "ColorSample",
    props: {
        color: String
    }
}
</script>

<style lang="scss" scoped>
.color-palette {
    display: flex;
    height: 120px;
    width: 120px;
    border: 0px;
    border-radius: 30px;
    margin: 10px;

    span {
        width: 100%;
        align-self: center;
        text-align: center;
        font-weight: bold;
        opacity: 0;
        transition: all ease-in-out .2s;
        background-color: rgb(0, 0, 0, 0.3);

        &:hover {
            opacity: 1;
        }
    }

    &:hover {
        span {
            opacity: 1;
        }
    }


}
</style>