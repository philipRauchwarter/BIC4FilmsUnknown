<template>
    <div class="film">
        <div class="box">
            <article class="media">
                <div class="media-content">
                    <div class="content">
                        <p>
                            <strong>{{film.name}}</strong>
                            <br/>
                            Actors:
                            <small v-for="actor in film.actors">
                                <actor-light-component :actor="actor"></actor-light-component>
                            </small>
                            <br/>
                            {{film.description}}
                        </p>
                    </div>
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                Created: {{film.created_at | moment('DD.MM.YYYY, hh:mm') }}
                                <br>
                                Last Modified: {{film.updated_at | moment('DD.MM.YYYY, hh:mm') }}
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="control">
                                <a :href="'./film/' + film.slug + '/edit'">
                                    <button class="button is-success is-outlined">
                                        Modify
                                    </button>
                                </a>
                                <button @click="deleteFilm(film)" class="button is-danger is-outlined">
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
        methods: {
            deleteFilm(actor) {
                axios.delete('./actor/'+actor.slug).then(response => {
                    console.log(response)
                });
                window.location.reload()
            }
        },
    };
</script>

<style scoped>

</style>
