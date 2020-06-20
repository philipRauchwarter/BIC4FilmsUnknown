<template>
    <div class="column">
        <div v-for="film in films">
            <actor-component :film="film"></actor-component>
        </div>
    </div>
</template>

<script>
    import ActorComponent from "./ActorComponent";

    export default {
        name: "ActorListComponent",
        props: {
            actorListList: {
                required: false,
            },
            user: {
                required: false,
            },
            showCategory: {
                required: false,
                default: true
            }
        },
        components: {ActorComponent},
        data() {
            return {
                actors: [],
            }
        },
        methods: {

        },
        created() {
            this.films = this.filmList;
        },
        watch: {
            filmList(newVal) {
                this.films = newVal;
            }
        }
    }
</script>

<style scoped>

</style>
