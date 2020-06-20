<template>
    <div class="column">
    <div class="film" v-for="film in films" :key="film.id">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{film.name}}</strong> <small>{{film.handle}}</small>
                            <br>
                            {{film.description}}
                        </p>
                    </div>
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                Created: {{film.created_at | moment('DD.MM.YYYY') }}
                                <br>
                                Last Modified: {{film.updated_at | moment('DD.MM.YYYY') }}
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="control">
                                <button class="button is-success is-outlined" >
                                    Modify
                                </button>
                                <button class="button is-danger is-outlined">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        name: "FilmListComponent",
        props: {
            filmList: {
                required: true
            },
            user: {
                required: true
            },
            showCategory: {
                required: false,
                default: true
            }
        },
        components: {
            //TableElement
        },
        data() {
            return {
                films: []
            }
        },
        methods: {
            openDeleteModal(film) {
                this.$emit('open-modal',
                    {
                        id: film.id,
                        title: film.title,
                        content: 'Do you really want to delete this Film?',
                        url: '/film/' + film.slug
                    });
            }
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
