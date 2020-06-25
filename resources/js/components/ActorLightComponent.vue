<template>
    <a href="actor/">
    <small>
        {{actor.name}}
    </small>
    </a>
</template>

<script>
    export default {
        name: "ActorLightComponent",
        props: ['actor'],
        data: function () {
            return {}
        },
        methods: {},
    };
</script>

<style scoped>

</style>
