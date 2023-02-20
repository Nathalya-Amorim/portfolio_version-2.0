<script>
export default {
    name: 'WorkView',
    data() {
        return {
            id: this.$route.params.id
        }
    }
}
</script>

<template>
    <main id="body">
        {{ id }}
    </main>
</template>
<style lang="scss">
main {
    max-width: 1280px;
    margin: auto;
}
</style>
