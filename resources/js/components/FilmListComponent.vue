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
                required: false
            },
            user: {
                required: false
            },
            showCategory: {
                required: false,
                default: true
            }
        },
        components: {
            FilmComponent
        },
        data: function () {
            return {
                films: [],
            }
        },
        methods: {

        },
        created() {
            axios.get('./list/film')
                .then(response => this.films = response.data)
                .catch(e => console.log(e));
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
