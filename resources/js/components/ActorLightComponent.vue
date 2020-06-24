<template>
    <div class="film">
            <article class="media">
                <div class="media-content">
                        <p>
                            {{actor.name}}
                        </p>
                </div>
            </article>
        </div>
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
