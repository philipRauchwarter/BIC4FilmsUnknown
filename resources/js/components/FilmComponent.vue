<template>
    <div class="film">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{film.name}}</strong> <small>Actors: {{film.actors.length}}</small>
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
                                <button @click="modifyFilm(film.id)" class="button is-success is-outlined">
                                    Modify
                                </button>
                                <button @click="deleteFilm(film.id)" class="button is-danger is-outlined">
                                    Delete
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</template>

<script>
    export default {
        name: "FilmComponent",
        props: ['film'],
        data: function () {
            return {}
        },
        methods: {},
    };
</script>

<style scoped>

</style>
