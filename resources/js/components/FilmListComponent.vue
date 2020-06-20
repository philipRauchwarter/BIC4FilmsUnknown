<template>
    <div class="column">
        <div v-for="film in films">
            <film-component :film="film"></film-component>
        </div>
    </div>
</template>

<script>
    import FilmComponent from "./FilmComponent";

    export default {
        name: "FilmListComponent",
        props: {
            filmList: {
                //required: true
            },
            user: {
                //required: true
            },
            showCategory: {
                required: false,
                default: true
            }
        },
        components: {
            FilmComponent
        },
        data() {
            return {
                films: [],
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
